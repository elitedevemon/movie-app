<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendNotification implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;

  /**
   * Create a new event instance.
   */
  public function __construct($message)
  {
    $this->message = $message;
  }

  public function broadcastOn()
  {
    return ['my-channel'];
  }

  public function broadcastAs()
  {
    return 'my-event';
  }
}
