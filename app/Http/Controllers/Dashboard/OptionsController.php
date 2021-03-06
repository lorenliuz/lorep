<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionCreateRequest;
use App\Http\Requests\OptionUpdateRequest;
use App\Repositories\OptionRepository;
use App\Validators\OptionValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class OptionsController.
 *
 * @package namespace App\Http\Controllers;
 */
class OptionsController extends Controller
{
    /**
     * @var OptionRepository
     */
    protected $repository;

    /**
     * @var OptionValidator
     */
    protected $validator;

    /**
     * OptionsController constructor.
     *
     * @param OptionRepository $repository
     * @param OptionValidator $validator
     */
    public function __construct(OptionRepository $repository, OptionValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $options = $this->repository->all();

        if ( request()->wantsJson() ) {

            return response()->json([
                'data' => $options,
            ]);
        }

        return view('options.index', compact('options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OptionCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(OptionCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $option = $this->repository->create($request->all());

            $response = [
                'message' => 'Option created.',
                'data' => $option->toArray(),
            ];

            if ( $request->wantsJson() ) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch ( ValidatorException $e ) {
            if ( $request->wantsJson() ) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $option = $this->repository->find($id);

        if ( request()->wantsJson() ) {

            return response()->json([
                'data' => $option,
            ]);
        }

        return view('options.show', compact('option'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option = $this->repository->find($id);

        return view('options.edit', compact('option'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OptionUpdateRequest $request
     * @param  string $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(OptionUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $option = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Option updated.',
                'data' => $option->toArray(),
            ];

            if ( $request->wantsJson() ) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch ( ValidatorException $e ) {

            if ( $request->wantsJson() ) {

                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if ( request()->wantsJson() ) {

            return response()->json([
                'message' => 'Option deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Option deleted.');
    }

    public function showGeneral()
    {
        $optionKeys = ['blogname', 'blogdescription', 'users_can_register', 'default_role'];
        $options = $this->repository->findWhereIn('option_name', $optionKeys)->pluck('option_value', 'option_name');
        return view('dashboard.options.general', compact('options'));
    }

    public function general()
    {

    }

    public function showWriting()
    {

        return view('dashboard.options.writing');
    }

    public function writing()
    {

    }

    public function showReading()
    {
        return view('dashboard.options.reading');

    }

    public function reading()
    {

    }

    public function showDiscussion()
    {
        return view('dashboard.options.discussion');

    }

    public function discussion()
    {

    }

    public function showMedia()
    {

        return view('dashboard.options.media');
    }

    public function media()
    {

    }

    public function showAdvance()
    {

        return view('dashboard.options.advance');
    }

    public function advance()
    {

    }
}
