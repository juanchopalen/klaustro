<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Notifications\ReplyCommentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    public function index($post_id)
    {
        return Comment::with('replies')
            ->where([
                'post_id' => $post_id,
                'reply' => null,
            ])
            ->orderBy('id', 'desc')
            ->paginate(request()->rows);
    }

    public function store()
    {
        $comment = Comment::create(request()->all());
        $comment->save();


        if (request()->reply) {
            $replied = Comment::find(request()->reply);
            Notification::send($replied, new ReplyCommentNotification($comment));
        }

        $comment->load('replies');

        return [
            'message' => 'Comment registered succesfully'
        ];
    }
}
