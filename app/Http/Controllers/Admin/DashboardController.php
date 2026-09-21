<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard admin
     */
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | STATISTICS
        |--------------------------------------------------------------------------
        */

        // Projects
        $projects = Project::count();

        // Active Projects
        $activeProjects = Project::where('is_active', true)->count();

        // Featured Projects
        $featuredProjects = Project::where('is_featured', true)
            ->where('is_active', true)
            ->count();

        // News
        $news = News::count();

        // Published News
        $publishedNews = News::where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->count();

        // Downloads
        $downloads = DB::table('downloads')->count();

        // Contact Messages
        $contactMessages = DB::table('contact_messages')->count();

        // Request a Quote
        $rfqRequests = DB::table('rfq_requests')->count();


        /*
        |--------------------------------------------------------------------------
        | RECENT PROJECTS
        |--------------------------------------------------------------------------
        */

        $recentProjects = Project::latest()
            ->limit(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | RECENT NEWS
        |--------------------------------------------------------------------------
        */

        $recentNews = News::latest()
            ->limit(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | RECENT CONTACT MESSAGES
        |--------------------------------------------------------------------------
        */

        $recentMessages = DB::table('contact_messages')
            ->latest()
            ->limit(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | RECENT RFQ
        |--------------------------------------------------------------------------
        */

        $recentRfq = DB::table('rfq_requests')
            ->latest()
            ->limit(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | DASHBOARD CHART PERIOD
        |--------------------------------------------------------------------------
        |
        | Grafik menampilkan data 12 bulan terakhir.
        |
        */

        $startDate = Carbon::now()
            ->subMonths(11)
            ->startOfMonth();

        $endDate = Carbon::now()
            ->endOfMonth();


        /*
        |--------------------------------------------------------------------------
        | GRAPH 1
        | CONTACT MESSAGES PER MONTH
        |--------------------------------------------------------------------------
        */

        $monthlyMessages = DB::table('contact_messages')
            ->whereBetween('created_at', [
                $startDate,
                $endDate
            ])
            ->get()
            ->groupBy(function ($message) {
                return Carbon::parse($message->created_at)
                    ->format('Y-m');
            });


        $messageChartLabels = [];
        $messageChartData = [];


        for ($i = 0; $i < 12; $i++) {

            $month = $startDate
                ->copy()
                ->addMonths($i);

            $key = $month->format('Y-m');

            $messageChartLabels[] = $month->format('M Y');

            $messageChartData[] =
                isset($monthlyMessages[$key])
                ? $monthlyMessages[$key]->count()
                : 0;
        }


        /*
        |--------------------------------------------------------------------------
        | GRAPH 2
        | REQUEST A QUOTE PER MONTH
        |--------------------------------------------------------------------------
        */

        $monthlyRfq = DB::table('rfq_requests')
            ->whereBetween('created_at', [
                $startDate,
                $endDate
            ])
            ->get()
            ->groupBy(function ($rfq) {
                return Carbon::parse($rfq->created_at)
                    ->format('Y-m');
            });


        $rfqChartLabels = [];
        $rfqChartData = [];


        for ($i = 0; $i < 12; $i++) {

            $month = $startDate
                ->copy()
                ->addMonths($i);

            $key = $month->format('Y-m');

            $rfqChartLabels[] = $month->format('M Y');

            $rfqChartData[] =
                isset($monthlyRfq[$key])
                ? $monthlyRfq[$key]->count()
                : 0;
        }


        /*
        |--------------------------------------------------------------------------
        | GRAPH 3
        | PROJECTS BY STATUS
        |--------------------------------------------------------------------------
        */

        $projectStatus = Project::select('status')
            ->get()
            ->groupBy('status');


        $projectStatusData = [

            'planning' => isset($projectStatus['planning'])
                ? $projectStatus['planning']->count()
                : 0,

            'ongoing' => isset($projectStatus['ongoing'])
                ? $projectStatus['ongoing']->count()
                : 0,

            'completed' => isset($projectStatus['completed'])
                ? $projectStatus['completed']->count()
                : 0,

        ];


        /*
        |--------------------------------------------------------------------------
        | SEND DATA TO DASHBOARD VIEW
        |--------------------------------------------------------------------------
        */

        return view('admin.dashboard', compact(

            // Statistics
            'projects',
            'activeProjects',
            'featuredProjects',
            'news',
            'publishedNews',
            'downloads',
            'contactMessages',
            'rfqRequests',

            // Recent data
            'recentProjects',
            'recentNews',
            'recentMessages',
            'recentRfq',

            // Contact Messages chart
            'messageChartLabels',
            'messageChartData',

            // RFQ chart
            'rfqChartLabels',
            'rfqChartData',

            // Project Status chart
            'projectStatusData'
        ));
    }
}
