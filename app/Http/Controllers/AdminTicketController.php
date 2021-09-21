<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comments;
use App\Mailers\AppMailer;
use App\Priority;
use App\Status;
use App\Ticket;
use App\User;
use App\Location;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminTicketController;

class AdminTicketController extends Controller
{
    public function index()
    {

        $menucount = $this->menucount();

        $tickets = Ticket::orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $locations = Location::all();
        $prioritys = Priority::all();
        $statuses = Status::all();
        $support_admins=DB::table('users')
                        ->select('users.fullname', 'users.id')
                        ->join('role_user', 'users.id', '=', 'role_user.user_id')
                        ->join('roles', 'role_user.role_id', '=', 'roles.id')
                        ->where('roles.id', '=', 8)->get();
        return view('admin.tickets.index', compact('menucount', 'tickets', 'categories','locations', 'statuses','support_admins', 'prioritys'));
    }


    public function opentickets()
    {
        $menucount = $this->menucount();

        $tickets = Ticket::where('status_id', 1)->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $prioritys = Priority::all();
        $statuses = Status::all();
        $locations = Location::all();
        $support_admins=DB::table('users')
                        ->select('users.fullname as fullname', 'users.id as id')
                        ->join('role_user', 'users.id', '=', 'role_user.user_id')
                        ->join('roles', 'role_user.role_id', '=', 'roles.id')
                        ->where('roles.id', '=', 8)->get();

        return view('admin.tickets.index', compact('menucount', 'tickets', 'categories','locations', 'statuses', 'support_admins', 'prioritys'));
    }

    public function inprogresstickets()
    {
        $menucount = $this->menucount();

        $tickets = Ticket::where('status_id', 2)->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $prioritys = Priority::all();
        $statuses = Status::all();
        $locations = Location::all();
        $support_admins=DB::table('users')
                        ->select('users.fullname as fullname', 'users.id as id')
                        ->join('role_user', 'users.id', '=', 'role_user.user_id')
                        ->join('roles', 'role_user.role_id', '=', 'roles.id')
                        ->where('roles.id', '=', 8)->get();

        return view('admin.tickets.index', compact('menucount', 'tickets', 'categories', 'statuses', 'locations','support_admins', 'prioritys'));
    }

    public function closedtickets()
    {
        $menucount = $this->menucount();

        $tickets = Ticket::where('status_id', 3)->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $prioritys = Priority::all();
        $statuses = Status::all();
        $locations = Location::all();
        $support_admins=DB::table('users')
                        ->select('users.fullname as fullname', 'users.id as id')
                        ->join('role_user', 'users.id', '=', 'role_user.user_id')
                        ->join('roles', 'role_user.role_id', '=', 'roles.id')
                        ->where('roles.id', '=', 8)->get();

        return view('admin.tickets.index', compact('menucount', 'tickets', 'categories','locations', 'statuses','support_admins', 'prioritys'));
    }

    public function reopenedtickets()
    {
        $menucount = $this->menucount();

        $tickets = Ticket::where('status_id', 4)->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $prioritys = Priority::all();
        $statuses = Status::all();
        $locations = Location::all();
        $support_admins=DB::table('users')
                        ->select('users.fullname as fullname', 'users.id as id')
                        ->join('role_user', 'users.id', '=', 'role_user.user_id')
                        ->join('roles', 'role_user.role_id', '=', 'roles.id')
                        ->where('roles.id', '=', 8)->get();

        return view('admin.tickets.index', compact('menucount', 'tickets', 'categories', 'locations','statuses', 'support_admins', 'prioritys'));
    }

    public function edit($ticket_id)
    {


        // $userprivilege = DB::table('role')
        // ->where('name', '=' 'support_admin')
        // ->first();

        $tickets = Ticket::where('ticket_id', $ticket_id)->firstOrFail();
        $categories = Category::lists('name', 'id');
        $prioritys = Priority::lists('name', 'id');
        $statuses = Status::lists('name', 'id');
        $support_admins=DB::table('users')
                        ->select('users.fullname as fullname', 'users.id as id')
                        ->join('role_user', 'users.id', '=', 'role_user.user_id')
                        ->join('roles', 'role_user.role_id', '=', 'roles.id')
                        ->where('roles.id', '=', 8)->lists('fullname', 'id');
        return view('admin.tickets.edit', compact('tickets',  'statuses', 'support_admins'));
    }

    public function show($ticket_id)

    {

        //  $userprivilege = DB::table('role')
        // ->where('name', '=' 'support_admin')
        // ->first();

        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $categories = Category::lists('name', 'id');
        $locations = Location::lists('name', 'id');

        $comments = $ticket->comments;

        $statuses = Status::lists('name', 'id');

        $prioritys = Priority::lists('name', 'id');
        //$support_admins = User::lists('fullname','id');

        $support_admins=DB::table('users')
                        ->select('users.fullname as fullname', 'users.id as id')
                        ->join('role_user', 'users.id', '=', 'role_user.user_id')
                        ->join('roles', 'role_user.role_id', '=', 'roles.id')
                        ->where('roles.id', '=', 8)->lists('fullname', 'id');
            //return $support_admins;            
        return view('admin.tickets.show', compact('ticket', 'categories','locations', 'statuses', 'prioritys','support_admins', 'comments'));
    }

    public function update(Request $request, $ticket_id, AppMailer $mailer)
    {
        $this->validate($request, [
                    // 'category'  => 'required',
                    // 'priority'  => 'required',
                    'status'    => 'required',
                    'user'    => 'required',
                    
                ]);

        
$current_date = Carbon::now()->format('Y-m-d');
$current_time = Carbon::now()->format('h:m:s');
        
$get_status_id = $request->status;

        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();
        // $ticket->category_id = $request->input('category');
        // $ticket->priority_id = $request->input('priority');
        $ticket->status_id = $request->input('status');
        $ticket->support_admin_id = $request->input('user');
        
        if($get_status_id==3){
        $ticket->resolve_date = $current_date;
        $ticket->resolve_time = $current_time;
             }
        $ticket->save();

        if($get_status_id==3){

        $ticketOwner = $ticket->user;

        $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

        return redirect()->route('managetickets.index')->with('success', "A ticket with ID: #$ticket->ticket_id has been resolved.");
            }elseif ($get_status_id==2) {
                return redirect()->route('managetickets.index')->with('success', "A ticket with ID: #$ticket->ticket_id is pending.");
            }elseif ($get_status_id==4) {
                return redirect()->route('managetickets.index')->with('success', "A ticket with ID: #$ticket->ticket_id has been reopened.");
            }
        return redirect()->route('managetickets.index')->with('success', "A ticket with ID: #$ticket->ticket_id has been assigned.");
    }




    public function destroy($ticket_id)
    {
        DB::table('tickets')->where('ticket_id', $ticket_id)->delete();

        return redirect()->route('managetickets.index')->with('info', 'Ticket deleted successfully');
    }

    private function menucount()
    {
        return [
            'all'        => \App\Ticket::all()->count(),
            'open'       => \App\Ticket::where('status_id', 1)->count(),
            'inprogress' => \App\Ticket::where('status_id', 2)->count(),
            'closed'     => \App\Ticket::where('status_id', 3)->count(),
            'reopened'   => \App\Ticket::where('status_id', 4)->count(),


          ];

//         
        $currentDay = Carbon::now();
        $tickets = Ticket::where('resolve_date', '<>', '$currentDay')->get();
        $day_Count = $tickets->count();
        return $day_Count;

    }

 
}
