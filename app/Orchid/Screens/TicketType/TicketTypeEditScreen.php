<?php

namespace App\Orchid\Screens\TicketType;

use App\Models\TicketType;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use App\Orchid\Layouts\TicketType\TicketTypeEditLayout;

class TicketTypeEditScreen extends Screen
{
    public $ticketType;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(TicketType $ticketType): iterable
    {
        return [
            'ticketType' => $ticketType
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Абонементы';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
                ->icon('check')
                ->method('save'),

            Button::make(__('Remove'))
                ->icon('trash')
                ->method('remove')
                ->canSee($this->ticketType->exists),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            TicketTypeEditLayout::class,
        ];
    }

    public function save(Request $request, TicketType $ticketType)
    {
        $ticketType->fill($request->get('ticket_type'));
        $ticketType->save();

        Toast::info($ticketType->exists ? 'Данные абонемента обновлены' : 'Добавлен новый абонемент.');

        return redirect()->route('platform.ticket_types');
    }

    public function remove(TicketType $ticketType)
    {
        $ticketType->delete();

        Toast::info('Абонемент удален.');

        return redirect()->route('platform.ticket_types');
    }
}
