<?php

namespace App\Http\Controllers;

use App\Mail\CheckUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class PDFController extends Controller
{
    public function index()
    {
        return view('pdf.index');
    }

    public function daily_report(Request $request)
    {
        $start_date = Carbon::parse($request->start_date)->toDateString();

        $end_date = Carbon::parse($request->end_date)->toDateString();

        $data['users'] = User::whereBetween('created_at',[$start_date,$end_date])->get();

       $data['start_date'] = Carbon::parse($request->start_date)
                             ->toDayDateTimeString();
       $data['end_date'] = Carbon::parse($request->end_date)
                             ->toDayDateTimeString();

       $count = User::whereBetween('created_at',[$start_date,$end_date])->count();

       if( $count < 1 ) {
        session()->flash('message','There is no user between those date!');
        return redirect()->back();
       }

       $pdf = PDF::loadView('pdf.pdf', $data, [
                   'format' => 'A4'
              ]);

        Mail::send('pdf.pdf', $data, function($message) use ($pdf){
            $message->from('sihassi.bahaeddine@gmailcom');
            $message->to('pdf@pdf.com');
            $message->subject('Date wise user report');
            $message->attachData($pdf->output(),'document.pdf');
        });

       $pdf->SetProtection(['copy', 'print'], '', 'pass');
       return $pdf->stream('document.pdf');
    }
}
