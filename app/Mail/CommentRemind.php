<?php


namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentRemind extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($title, $comment, $url)
    {
        $this -> subject('Re: ' . $title);
        $this -> title = $title;
        $this -> comment = $comment;
        $this -> url = $url;
    }

    public function build() {
        return $this -> view('emails.comments.remind')
            -> with([
                'title' => $this -> title,
                'comment' => $this -> comment,
                'url' => $this -> url
            ]);
    }
}
