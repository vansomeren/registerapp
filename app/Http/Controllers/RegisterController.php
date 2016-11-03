<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03/11/2016
 * Time: 11:51
 */
use App\Models\Member;
use App\Http\Requests\CreateMemberRequest;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request) {

        $members = Member::query()
            ->orderBy('id','DESC')
            ->paginate(5);

        return view('register.index', [
            'members'=>$members
        ])

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create () {

        return view('register.create');
    }

    /**
     * @param CreateMemberRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateMemberRequest $request){

        $member = Member::create([
            'name'=>$request->get('name'),
            'age'=>$request->get('age'),
            'phone_number' =>$request->get('phone_number')

        ]);

        $member->save();

        return redirect()->route('member.index')
            ->with('success','Member Added successfully');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {

        $member = Member::find($id);

        return view('register.show',[

            'member'=>$member
        ]);

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $member = Member::find($id);

        return view('register.edit', [

            'member'=>$member
        ]);
    }

    /**
     * @param CreateMembersRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreateMemberRequest $request, $id)

    {


        $member = Member::find($id);

        $member->name = $request->input('name');

        $member->age = $request->input('age');

        $member->phone_number = $request->input('phone_number');


        $member->save();

        return redirect()->route('member.index')

            ->with('success','Member updated successfully');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Member::find($id)->delete();

        return redirect()->route('member.index')

            ->with('success','Member deleted successfully');

    }
}