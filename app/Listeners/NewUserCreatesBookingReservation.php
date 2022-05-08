<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\Booking;
use App\Models\Flight;
use App\Models\FlightUser;
use App\Models\Reservation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewUserCreatesBookingReservation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $flight = factory(Flight::class)->create([  
        ]);
        $booking = factory(Booking::class)->create([
            'user_id' => $event->user->id,
            'name' => $event->user->name,
            'email' => $event->user->email,
            'airline' => $flight->airline,
            'origin' => $flight->origin,
            'destination' => $flight->destination,
            'price' => $flight->price,
            'promo_code' => $flight->reservation_code,
        ]);

       
        factory(Reservation::class)->create([
            'user_id' => $event->user->id,
            'booking_id' => $booking->id,
            'flight_id' => factory(Flight::class),
            'passenger_name' => $event->user->name,
            'passenger_email' => $event->user->email,
            'reservation_code' => $flight->promo_code,
            'status' => 'active',
            'airline' => $flight->airline,
            'origin' => $flight->origin,
            'destination' => $flight->destination,
            'price' => $flight->price,
            'tax' => $booking->tax
        ]);
        factory(FlightUser::class)->create([
            'flight_id' => factory(Flight::class),
            'user_id' => $event->user->id,
            'reservation_code' => $flight->promo_code,
        ]);
       


    }
}
