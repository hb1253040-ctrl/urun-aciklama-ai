<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerateDescriptionRequest;
use App\Services\DescriptionGenerator;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Throwable;

class DescriptionController extends Controller
{
    public function __construct(
        private readonly DescriptionGenerator $generator,
    ) {
    }

    public function index(): View
    {
        return view('description');
    }

    public function generate(GenerateDescriptionRequest $request): RedirectResponse
    {
        $data = $request->validated();

        try {
            $result = $this->generator->generate(
                $data['product_name'],
                $data['features'],
            );
        } catch (Throwable $e) {
            report($e);

            return redirect()
                ->route('description.index')
                ->withInput()
                ->with('error', 'Açıklama üretilirken bir sorun oluştu. Lütfen tekrar dene.');
        }

        return redirect()
            ->route('description.index')
            ->withInput()
            ->with('result', $result);
    }
}