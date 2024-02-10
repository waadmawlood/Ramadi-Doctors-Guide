<?php

namespace App\Observers;

use App\Models\PostComment;

class PostCommentObserver
{
    /**
     * Handle the PostComment "creating" event.
     */
    public function creating(PostComment $post_comment): void
    {
        $post_comment->user_id = auth()->id();
    }

    /**
     * Handle the PostComment "created" event.
     */
    public function created(PostComment $post_comment): void
    {
        //
    }

    /**
     * Handle the PostComment "updated" event.
     */
    public function updated(PostComment $post_comment): void
    {
        //
    }

    /**
     * Handle the PostComment "deleted" event.
     */
    public function deleted(PostComment $post_comment): void
    {
        //
    }

    /**
     * Handle the PostComment "restored" event.
     */
    public function restored(PostComment $post_comment): void
    {
        //
    }

    /**
     * Handle the PostComment "force deleted" event.
     */
    public function forceDeleted(PostComment $post_comment): void
    {
        //
    }
}
