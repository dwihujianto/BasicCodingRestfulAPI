<?php

namespace App\Http\Controllers;

use App\UserReview;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserReview::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',
            'rating' => 'required',
            'review' => 'required',
        ]);

        $review = new UserReview($request->all());

        return $review;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserReview  $userReview
     * @return \Illuminate\Http\Response
     */
    public function show(UserReview $userReview)
    {
        return $userReview;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserReview  $userReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserReview $userReview)
    {
        $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',
            'rating' => 'required',
            'review' => 'required',
        ]);

        $userReview->update($request->all());

        return $userReview;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserReview  $userReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserReview $userReview)
    {
        $userReview->delete();

        return $userReview;
    }
}
