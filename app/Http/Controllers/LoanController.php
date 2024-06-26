<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loan.index', [

            'loans' => Loan::whereNull('returnDate')->get(),
            'records' => Loan::whereNotNull('returnDate')->paginate(30)
        ]);
    }

    public function search(Request $request)
    {
        $result = Loan::whereNull('returnDate')->whereAny(['book_id', 'member_icNum'], '=', "$request->searchkey")->paginate(25);
        $loans = Loan::whereNull('returnDate')->get();
        $records = Loan::whereNotNull('returnDate')->orderBy('id', 'DESC')->paginate(30);

        return view('loan.index', [
            'loans' => $result,
            'records' => $records
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $member = Member::find($request->member_id);
        $book = Book::find($request->book_id);

        if ($book->available == 'Yes') {

            //create new loan
            Loan::create([
                'book_id' => $request->book_id,
                'member_id' => $member->id,
                'member_icNum' => $member->icNum,
                'borrowingDate' => Carbon::parse($request->borrowingDate)->format('d/m/Y'),
            ]);

            //update book availability
            $book->available = 'No';
            $book->save();

        } else{
            return back()->withinput($request->input());
        }

        return redirect(route('loan.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        //update loan return date
        $loan->returnDate = Carbon::parse($request->returnDate)->format('d/m/Y');
        $loan->save();

        //update book availability
        $book = $loan->book; //buku yang ada dalam loan
        $book->available = 'Yes';
        $book->save();


        return back(); //redirect back to the same page
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
