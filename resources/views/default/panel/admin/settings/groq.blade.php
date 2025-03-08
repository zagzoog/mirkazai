@extends('panel.layout.settings')
@section('title', __(\App\Domains\Engine\Enums\EngineEnum::GROQ->label() . ' Settings'))
@section('titlebar_actions', '')
@section('titlebar_subtitle', __('This API key is used for all AI-powered features and Content Writing'))

@section('additional_css')
    <link
        href="{{ custom_theme_url('/assets/libs/select2/select2.min.css') }}"
        rel="stylesheet"
    />
@endsection

@section('settings')
    <form
        id="settings_form"
        onsubmit="return groqSettingsSave();"
        enctype="multipart/form-data"
    >
        <h3 class="mb-[25px] text-[20px]">{{ __('Groq Settings') }}</h3>
        <div class="row">
            @if ($app_is_demo)
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">{{ __('Groq API Key') }}</label>
                        <input
                            class="form-control"
                            id="groq_api_key"
                            type="text"
                            name="groq_api_key"
                            value="*********************"
                        >
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">{{ __('Groq API Key') }}
                            <x-alert class="mt-2">
                                <x-button
                                    variant="link"
                                    href="https://console.groq.com"
                                    target="_blank"
                                >
                                    {{ __('Get an API key') }}
                                </x-button>
                            </x-alert>
                        </label>
                        <input
                            class="form-control"
                            id="groq_api_key"
                            type="text"
                            name="groq_api_key"
                            value="{{ setting('groq_api_key') }}"
                            required
                        >
                        <x-alert class="mt-2">
                            <p>
                                {{ __('Please ensure that your Groq API key is fully functional and billing defined on your Groq account.') }}
                            </p>
                        </x-alert>
                    </div>
                </div>
            @endif
        </div>

        <button
            class="btn btn-primary w-full"
            id="settings_button"
            form="settings_form"
        >
            {{ __('Save') }}
        </button>
    </form>
@endsection

@push('script')
    <script src="{{ custom_theme_url('/assets/js/panel/settings.js') }}"></script>
    <script src="{{ custom_theme_url('/assets/libs/select2/select2.min.js') }}"></script>
@endpush 