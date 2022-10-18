<?php

namespace app\controller;

use support\Request;

class Index
{
    public function index(Request $request)
    {
        dump(get_class(app('cache')->driver('redis')));
        dump(app('cache')->get('aaa'));
        dump(cache()->set('aaa', 2222));
        dump(cache()->get('aaa'),'aaaa');
        \Cache::set('aaa', 111);
        dump(\Cache::get('aaa'), 'bbbb');
        \validator()->validate($request->all(), [
            'b' => 'required',
        ], [
            'b.required' => 'b 必填'
        ]);
        return response('hello webman');
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}
