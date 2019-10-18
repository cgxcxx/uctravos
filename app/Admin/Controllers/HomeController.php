<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
    public function store(TopicRequest $request, Topic $topic)
    {
        $topic->fill($request->all());
        $topic->save();

        return redirect()->route('topics.show', $topic->id)->with('success', '成功创建话题');
    }

    // 更新
    public function update(TopicRequest $request, Topic $topic)
    {
        $topic->update($request->all());

        return redirect()->route('topics.show', $topic->id)->with('success', '更新成功');
    }
}
