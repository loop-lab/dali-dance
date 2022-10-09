<?php

namespace App\Orchid\Screens\Style;

use App\Models\Style;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use App\Orchid\Layouts\Style\StyleEditLayout;

class StyleEditScreen extends Screen
{
    public $style;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Style $style): iterable
    {
        return [
            'style' => $style,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Направление';
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
                ->canSee($this->style->exists),
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
            StyleEditLayout::class,
        ];
    }

    public function save(Request $request, Style $style)
    {
        $style->fill($request->get('style'));

        $style->save();

        Toast::info($style->exists ? 'Данные преподавателя обновлены' : 'Добавлен новый преподаватель.');
        return redirect()->route('platform.styles');
    }

    public function remove(Style $style)
    {
        $style->delete();

        Toast::info('Направление удалено.');

        return redirect()->route('platform.styles');
    }
}
