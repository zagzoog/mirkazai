@php
    use App\Enums\Plan\TypeEnum;
    $isPrepaid = $plan->type === TypeEnum::TOKEN_PACK->value;
@endphp
<ul class="mt-6 w-full px-1 text-left max-lg:p-0">
    <li class="relative mb-3">
        <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
            <svg
                width="13"
                height="10"
                viewBox="0 0 13 10"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z" />
            </svg>
        </span>

        {{ __('Access') }} <strong>{{ $isPrepaid ? __('All') : __($plan->checkOpenAiItemCount()) }}</strong> {{ __('Features') }}

        <div class="group inline-block sm:relative sm:before:absolute sm:before:-inset-2.5">
            <span class="peer relative -mt-6 inline-flex !h-6 !w-6 cursor-pointer items-center justify-center">
                <x-tabler-info-circle-filled class="size-4 opacity-20" />
            </span>
            <div
                class="lqd-price-table-info min-w-60 pointer-events-none invisible absolute start-full top-1/2 z-10 ms-2 max-h-96 -translate-y-1/2 translate-x-2 scale-105 overflow-y-auto rounded-lg border bg-background p-5 opacity-0 shadow-xl transition-all before:absolute before:-start-2 before:top-0 before:h-full before:w-2 group-hover:pointer-events-auto group-hover:visible group-hover:translate-x-0 group-hover:opacity-100 max-sm:!end-0 max-sm:!start-0 max-sm:!top-full max-sm:!me-0 max-sm:!ms-0 max-sm:mt-4 max-sm:!translate-x-0 max-sm:!translate-y-0 [&.anchor-end]:end-2 [&.anchor-end]:start-auto [&.anchor-end]:me-2 [&.anchor-end]:ms-0"
                data-set-anchor="true"
            >
                <ul>
                    @foreach ($allFeatures as $key => $openAi)
                        <li class="mb-3 mt-5 first:mt-0">
                            <h5 class="text-base">{{ ucfirst($key) }}</h5>
                        </li>
                        @php
                            $openAi = \App\Helpers\Classes\Helper::sortingOpenAiSelected($openAi, $plan->open_ai_items);
                        @endphp
                        @foreach ($openAi as $itemOpenAi)
                            @php
                                $exist = $plan->checkOpenAiItem($itemOpenAi->slug);
                                if ($isPrepaid && $plan->checkOpenAiItemCount() <= 0) {
                                    $exist = true;
                                }
                            @endphp
                            <li class="mb-1.5 flex items-center gap-1.5 text-heading-foreground">
                                <span @class([
                                    'bg-[#684AE2] bg-opacity-10 text-[#684AE2]' => $exist,
                                    'bg-foreground/10 text-foreground' => !$exist,
                                    'size-4 inline-flex items-center justify-center rounded-xl align-middle',
                                ])>
                                    @if ($exist)
                                        <x-tabler-check class="size-3" />
                                    @else
                                        <x-tabler-minus class="size-3" />
                                    @endif
                                </span>
                                <small @class(['opacity-60' => !$exist])>
                                    {{ $itemOpenAi->title }}
                                </small>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </li>
    <li class="relative mb-3">
        <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
            <svg
                width="13"
                height="10"
                viewBox="0 0 13 10"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z" />
            </svg>
        </span>

        @lang('Plan Credits')
        <div class="group inline-block sm:relative sm:before:absolute sm:before:-inset-2.5">
            <span class="peer relative -mt-6 inline-flex !h-6 !w-6 cursor-pointer items-center justify-center">
                <x-tabler-info-circle-filled class="size-4 opacity-20" />
            </span>
            <div
                class="lqd-price-table-info min-w-60 pointer-events-none invisible absolute start-full top-1/2 z-10 ms-2 max-h-96 -translate-y-1/2 translate-x-2 scale-105 overflow-y-auto rounded-lg border bg-background p-5 opacity-0 shadow-xl transition-all before:absolute before:-start-2 before:top-0 before:h-full before:w-2 group-hover:pointer-events-auto group-hover:visible group-hover:translate-x-0 group-hover:opacity-100 max-sm:!end-0 max-sm:!start-0 max-sm:!top-full max-sm:!me-0 max-sm:!ms-0 max-sm:mt-4 max-sm:!translate-x-0 max-sm:!translate-y-0 [&.anchor-end]:end-2 [&.anchor-end]:start-auto [&.anchor-end]:me-2 [&.anchor-end]:ms-0"
                data-set-anchor="true"
            >
                <x-credit-list
                    :plan="$plan"
                    showType="directly"
                    tooltipClass="max-w-48"
                />
            </div>
        </div>
    </li>
    @if ($plan->is_team_plan)
        <li class="mb-3">
            <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                <svg
                    width="13"
                    height="10"
                    viewBox="0 0 13 10"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z" />
                </svg>
            </span>
            <strong>
                {{ number_format($plan->plan_allow_seat) }}
            </strong>
            {{ __('Team allow seats') }}
        </li>
    @endif
    @if ($plan->trial_days > 0)
        <li class="mb-4 flex items-center">
            <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                <svg
                    width="13"
                    height="10"
                    viewBox="0 0 13 10"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z" />
                </svg>
            </span>
            {{ number_format($plan->trial_days) . ' ' . __('Days of free trial.') }}
        </li>
    @endif
    @if (!empty($plan->features))
        @foreach (explode(',', $plan->features) as $feature)
            <li class="mb-4 flex items-center">
                <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                    <svg
                        width="13"
                        height="10"
                        viewBox="0 0 13 10"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z" />
                    </svg>
                </span>
                {{ trim(__($feature)) }}
            </li>
        @endforeach
    @endif
</ul>
