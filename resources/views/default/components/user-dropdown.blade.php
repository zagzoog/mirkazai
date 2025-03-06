@php
    $user_avatar = Auth::user()->avatar;

    if (!Auth::user()->github_token && !Auth::user()->google_token && !Auth::user()->facebook_token) {
        $user_avatar = '/' . $user_avatar;
    }
@endphp

<x-dropdown.dropdown
    class="header-user-dropdown"
    anchor="end"
    offsetY="20px"
>
    <x-slot:trigger
        class="size-9 p-0"
    >
        <span
            class="size-full inline-block rounded-full bg-cover"
            style="background-image: url({{ custom_theme_url($user_avatar) }})"
        ></span>
    </x-slot:trigger>

    <x-slot:dropdown
        class="min-w-52"
    >
        <div class="px-3 pt-3">
            <p class="m-0 text-foreground">{{ Auth::user()->fullName() }}</p>
            <p class="text-3xs text-foreground/70">{{ Auth::user()->email }}</p>
        </div>

        <hr>

        <x-credit-list
            class:legends="gap-1"
            class:modal-trigger="text-2xs w-full"
            modal-trigger-variant="ghost-shadow"
            modal-trigger-pos="block"
            expanded-modal-trigger
        />

        <hr>

        <div class="pb-2 text-2xs">
            <a
                class="flex w-full items-center px-3 py-2 hover:bg-foreground/5"
                href="{{ route('dashboard.user.2fa.activate') }}"
            >
                {{ __('2-Factor Auth.') }}
            </a>
            <a
                class="flex w-full items-center px-3 py-2 hover:bg-foreground/5"
                href="{{ route('dashboard.user.payment.subscription') }}"
            >
                {{ __('Plan') }}
            </a>
            <a
                class="flex w-full items-center px-3 py-2 hover:bg-foreground/5"
                href="{{ route('dashboard.user.orders.index') }}"
            >
                {{ __('Orders') }}
            </a>
            <a
                class="flex w-full items-center px-3 py-2 hover:bg-foreground/5"
                href="{{ route('dashboard.user.settings.index') }}"
            >
                {{ __('Settings') }}
            </a>
            <form
                class="flex w-full"
                id="logout"
                method="POST"
                action="{{ route('logout') }}"
            >
                @csrf
                <button
                    class="flex w-full items-center px-3 py-2 hover:bg-foreground/10"
                    type="submit"
                >
                    {{ __('Logout') }}
                </button>
            </form>
        </div>

    </x-slot:dropdown>
</x-dropdown.dropdown>
