<?php

namespace App\Mail;

use App\Exports\ZuoxfHeduiExport;
use App\Models\Zhongjie;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Maatwebsite\Excel\Facades\Excel;

class ZuoxfHedui extends Mailable
{
    use Queueable, SerializesModels;

    public $intermediary;
    public $intermediary_name;
    public $export_settledate;
    public $export_settle_intermediary_id;
    public $date;

    /**
     * Create a new message instance.
     *创建新的消息实例。
     * @return void
     */
    public function __construct($request)
    {
        $this->intermediary = Zhongjie::where('id', '=', $request->input('export_settle_intermediary_id'))->first();
        $this->intermediary_name = $this->intermediary->name;
        $this->export_settledate = $request->input('export_settledate');
        $this->export_settle_intermediary_id = $request->input('export_settle_intermediary_id');
        $this->date = $this->export_settledate;

//        dd($intermediary);
    }

    /**
     * Get the message envelope.
     *邮件主题、收件人
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
//            from: new Address('dison_y@163.com', '系统发送-dison'),//设置邮件发件人
            subject: '(席位确认）白鸽宝职场坐席人力确认202310',//设置主题
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
            view: 'emails.zuoxf.hedui_sendmail',// resources/views/emails 目录来存放所有的邮件模板
            with: [//使用 with 方法来手动传递数据到视图中
//                'orderName' => $this->order->name,
//                'orderPrice' => $this->order->price,
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
        $export_settledate = $this->export_settledate;
        $export_settle_intermediary_id = $this->export_settle_intermediary_id;
        $intermediary_name = $this->intermediary_name;
        $date = $this->date;

//        dd((new ZuoxfHeduiExport(//3,用多sheet导出Excel
//            $export_settledate,
//            $export_settle_intermediary_id,
//            $intermediary_name,
//        ))->download(('坐席费-' . $intermediary_name . '-' .$date. '.xlsx')));
        return array(
            Attachment::fromData(new ZuoxfHeduiExport(//3,用多sheet导出Excel
                $export_settledate,
                $export_settle_intermediary_id,
                $intermediary_name,
            ),

            );
    }
}
