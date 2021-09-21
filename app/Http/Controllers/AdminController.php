<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\Ticket;
use App\User;

use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {

        $today=Carbon::today()->format('Y-m-d');
       $get_week_start_sunday =Carbon::now()->startOfWeek()->subDays(1)->format('Y-m-d');

       $get_month_start =Carbon::now()->startOfMonth()->format('Y-m-d');

       $get_year_start =Carbon::now()->startOfYear()->format('Y-m-d');

       
          // dd($get_year_start);

        $count_users = User::all()->count();
        $count_roles = Role::all()->count();
        $count_permissions = Permission::all()->count();
        $count_open_ticket = Ticket::where('status_id', 1)->count();
        $count_inprogress_ticket = Ticket::where('status_id', 2)->count();
        $count_closed_ticket = Ticket::where('status_id', 3)->count();
        $count_reopened_ticket = Ticket::where('status_id', 4)->count();
// requested
        $count_number_of_issues_reported_today = Ticket::where('request_date',  $today)->count();

          $count_number_of_issues_reported_this_week = Ticket::where('request_date', '>=', $get_week_start_sunday)->count();

          $count_number_of_issues_reported_this_month = Ticket::where('request_date', '>=', $get_month_start)->count();

          $count_number_of_issues_reported_this_year = Ticket::where('request_date', '>=', $get_year_start)->count();

//Resolved
          $count_number_of_issues_resolved_today = Ticket::
          where('status_id', 3)
          ->where('resolve_date',  $today)
          ->count();

          $count_number_of_issues_resolved_this_week = Ticket::
            where('status_id', 3)
          ->where('resolve_date', '>=', $get_week_start_sunday)
          ->count();

          $count_number_of_issues_resolved_this_month = Ticket::
         where('status_id', 3)
          ->where('resolve_date', '>=', $get_month_start)
          ->count();

          $count_number_of_issues_resolved_this_year = Ticket::where('resolve_date', '>=', $get_year_start)->count();

         
       

        return view('admin.dashboard',
        compact('count_reopened_ticket',
                'count_closed_ticket',
                'count_inprogress_ticket',
                'count_users', 'count_roles',
                'count_permissions',
                'count_open_ticket', 
                'count_number_of_issues_reported_today',
                'count_number_of_issues_reported_this_week',
                'count_number_of_issues_reported_this_month',
                'count_number_of_issues_reported_this_year',
                'count_number_of_issues_resolved_today',
                'count_number_of_issues_resolved_this_week',
                'count_number_of_issues_resolved_this_month',
                'count_number_of_issues_resolved_this_year'

        ));
    }
}
