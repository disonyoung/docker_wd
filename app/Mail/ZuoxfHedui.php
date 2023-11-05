<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class ZuoxfHedui extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     *邮件主题、收件人
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
//            from: new Address('jeffrey@example.com', 'Jeffrey Way'),//设置邮件收件人
            subject: 'Zuoxf Hedui',//设置主题
        );
    }

    /**
     * Get the message content definition.
     *邮件正文
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'view.name',// resources/views/emails 目录来存放所有的邮件模板
            with: [//使用 with 方法来手动传递数据到视图中
                'orderName' => $this->order->name,
                'orderPrice' => $this->order->price,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *获取邮件的附件
     * @return array
     */
    public function attachments()
    {
        return [
            Attachment::fromPath('/path/to/file'),
        ];
    }
}
