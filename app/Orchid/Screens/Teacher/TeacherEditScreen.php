<?php

namespace App\Orchid\Screens\Teacher;

use App\Models\Teacher;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use App\Orchid\Layouts\Teacher\TeacherEditLayout;

class TeacherEditScreen extends Screen
{
    public $teacher;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Teacher $teacher): iterable
    {
        return [
            'teacher' => $teacher,
            'style' => $teacher->style()->get()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Преподаватель';
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
                ->canSee($this->teacher->exists),
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
            TeacherEditLayout::class,
        ];
    }

    public function save(Request $request, Teacher $teacher)
    {
        $teacher->fill($request->get('teacher'));
        $teacher->save();
        $teacher->style()->sync($request->get('style'));

        Toast::info($teacher->exists ? 'Данные преподавателя обновлены' : 'Добавлен новый преподаватель.');

        return redirect()->route('platform.teachers');
    }

    public function remove(Teacher $teacher)
    {
        $teacher->delete();

        Toast::info('Преподаватель удален.');

        return redirect()->route('platform.teachers');
    }
}
