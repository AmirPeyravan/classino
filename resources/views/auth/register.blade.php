<x-guest-layout>
    <style>
        /* فونت‌ها و استایل‌های پایه */
        @font-face {
            font-family: 'Vazir';
            src: url('https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/Vazir.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        :root {
            /* متغیرهای رنگ */
            --primary-color: #336699;
            --primary-hover: #224477;
            --accent-color: #ffd700;
            --background-color: #e0e0e0;
            --text-color: #333;
            --error-color: #d32f2f;
            --border-color: #ccc;
            --link-color: #666;
            --link-hover: #333;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Vazir', Tahoma, Arial, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* فرم */
        .form-container {
            max-width: 32rem;
            width: 100%;
            background-color: #fff;
            border: 2px solid var(--accent-color);
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.15);
            margin: 2rem auto;
        }

        /* گروه ورودی */
        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-size: 1rem;
            color: var(--primary-color);
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid var(--border-color);
            border-radius: 0.3125rem;
            font-size: 1rem;
            font-family: 'Vazir', Tahoma, Arial, sans-serif;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: var(--accent-color);
            outline: none;
        }

        /* پیام خطا */
        .form-error {
            color: var(--error-color);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        /* اقدامات فرم */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.25rem;
            gap: 1rem;
        }

        .form-actions a {
            color: var(--link-color);
            text-decoration: underline;
            font-size: 0.875rem;
            transition: color 0.3s ease;
        }

        .form-actions a:hover {
            color: var(--link-hover);
        }

        .form-button {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.3125rem;
            font-size: 1rem;
            font-family: 'Vazir', Tahoma, Arial, sans-serif;
            cursor: pointer;
            box-shadow: 0 0.125rem 0.3125rem rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: var(--primary-hover);
        }

        .form-button:focus {
            outline: 2px solid var(--accent-color);
            outline-offset: 2px;
        }

        /* مدیا کوئری‌ها */
        @media (max-width: 48rem) {
            .form-container {
                padding: 1rem;
                margin: 1rem 0.9375rem;
            }

            .form-group label {
                font-size: 0.875rem;
            }

            .form-group input {
                padding: 0.625rem;
                font-size: 0.875rem;
            }

            .form-button {
                padding: 0.625rem 1.25rem;
                font-size: 0.875rem;
            }
        }

        @media (max-width: 36rem) {
            .form-actions {
                flex-direction: column;
                gap: 0.625rem;
                align-items: stretch;
            }

            .form-actions a {
                font-size: 0.75rem;
                text-align: center;
            }

            .form-button {
                width: 100%;
            }
        }
    </style>

    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- نام -->
            <div class="form-group">
                <x-input-label for="name" :value="__('نام')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" aria-describedby="name-error" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 form-error" id="name-error" />
            </div>

            <!-- ایمیل -->
            <div class="form-group mt-4">
                <x-input-label for="email" :value="__('ایمیل')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" aria-describedby="email-error" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 form-error" id="email-error" />
            </div>

            <!-- رمز عبور -->
            <div class="form-group mt-4">
                <x-input-label for="password" :value="__('رمز عبور')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" aria-describedby="password-error" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 form-error" id="password-error" />
            </div>

            <!-- تکرار رمز عبور -->
            <div class="form-group mt-4">
                <x-input-label for="password_confirmation" :value="__('تکرار رمز عبور')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" aria-describedby="password_confirmation-error" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 form-error" id="password_confirmation-error" />
            </div>

            <div class="form-actions mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('حساب دارید ؟ وارد شوید') }}
                </a>

                <x-primary-button class="ms-4 form-button">
                    {{ __('ثبت نام') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
