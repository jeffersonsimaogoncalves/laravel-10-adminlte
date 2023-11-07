<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update UI mode') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Update your ui from here There is 2 light/Dark.') }}
        </p>
    </header>
    <form action="{{ route('admin.uiupdate') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="mode" class="form-label">Mode</label>
            <select name="mode" id="mode" class="form-control">
                <option value="dark">Dark</option>
                <option value="light">Light</option>
            </select>
        </div>
        <div class="form-group">
            <div class="flex items-center gap-4">
                <button class="btn btn-primary btn-sm" type="submit">{{ __('Save') }}</button>
                @if (session('status') === 'ui-mode')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ 'Saved' }}
                        <button type="button" class="btn btn-sm float-end float-right"
                            data-bs-dismiss="alert" aria-label="Close">&times;</button>
                    </div>
                @endif
            </div>
        </div>
    </form>
</section>