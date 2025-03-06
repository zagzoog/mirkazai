@php
    $api_key = '';
@endphp

@extends('panel.layout.app', ['disable_tblr' => true])
@section('title', __('Realtime Chat'))
@section('titlebar_actions', '')

@push('before-head-close')
    @vite('resources/views/default/js/components/realtime-frontend/openaiRealtime.js')
@endpush

@section('content')
    <div class="py-10">
        <form>
            <div class="flex">
                <div id="received-text-container"></div>
                <div class="controls">
                    <div class="input-group">
                        <label for="endpoint">Endpoint</label>
                        <input
                            id="endpoint"
                            type="text"
                            value="wss://api.openai.com/v1/realtime?model=gpt-4o-realtime-preview-2024-10-01"
                            placeholder="Enter resource/endpoint URL"
                        />
                        <div class="toggle-group">
                            <label for="azure-toggle">Azure OpenAI</label>
                            <input
                                id="azure-toggle"
                                type="checkbox"
                                checked
                            />
                        </div>
                        <label for="api-key">API Key</label>
                        <input
                            id="api-key"
                            type="password"
                            value="{{ $api_key }}"
                            placeholder="Enter API key"
                        />
                        <label for="deployment-or-model">Deployment</label>
                        <input
                            id="deployment-or-model"
                            type="text"
                            placeholder="Enter deployment/model, e.g. gpt-4o-realtime-preview-2024-10-01"
                            value="gpt-4o-realtime-preview-2024-10-01"
                        />
                    </div>
                    <div class="input-group">
                        <div class="button-group">
                            <button
                                id="start-recording"
                                type="button"
                            >Record</button>
                            <button
                                id="stop-recording"
                                type="button"
                                disabled="true"
                            >Stop</button>
                        </div>
                        <div class="input-group">
                            <label for="session-instructions">System Message</label>
                            <textarea
                                id="session-instructions"
                                placeholder="Optional instructions for the session, e.g. 'You talk like a pirate.'"
                                rows="4"
                            ></textarea>
                        </div>
                        <div class="input-group">
                            <label for="temperature">Temperature</label>
                            <input
                                id="temperature"
                                type="number"
                                min="0.6"
                                max="1.2"
                                step="0.05"
                                placeholder="0.6-1.2 (default 0.8)"
                                value="0.8"
                            />
                        </div>
                        <div class="input-group">
                            <label for="voice">Voice</label>
                            <select id="voice">
                                <option></option>
                                <option>alloy</option>
                                <option>echo</option>
                                <option>shimmer</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('script')
@endpush
