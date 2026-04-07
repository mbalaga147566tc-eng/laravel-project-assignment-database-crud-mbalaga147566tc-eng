<x-layout>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Mono:wght@400;700&display=swap');

* { box-sizing: border-box; margin: 0; padding: 0; }

.rb-page {
    min-height: 100vh;
    background: #0a0a0a;
    font-family: 'Space Mono', monospace;
    overflow-x: hidden;
}

.rb-hero {
    position: relative;
    padding: 60px 40px 40px;
    overflow: hidden;
}

.rb-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: repeating-linear-gradient(
        45deg,
        transparent,
        transparent 40px,
        rgba(255,255,255,0.02) 40px,
        rgba(255,255,255,0.02) 41px
    );
}

.rb-title-stack {
    display: flex;
    flex-direction: column;
    gap: 0;
    line-height: 0.85;
}

.rb-title-line {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(80px, 15vw, 180px);
    letter-spacing: -2px;
    display: block;
}

.rb-title-line:nth-child(1) { color: #ff2d55; }
.rb-title-line:nth-child(2) { -webkit-text-stroke: 2px #ff9f0a; color: transparent; }
.rb-title-line:nth-child(3) { color: #ffd60a; }
.rb-title-line:nth-child(4) { -webkit-text-stroke: 2px #30d158; color: transparent; }
.rb-title-line:nth-child(5) { color: #0a84ff; }

.rb-subtitle {
    position: absolute;
    right: 40px;
    top: 60px;
    writing-mode: vertical-rl;
    font-size: 11px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #444;
    font-family: 'Space Mono', monospace;
}

.rb-body {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 0;
    min-height: calc(100vh - 400px);
}

.rb-form-panel {
    background: #111;
    border-top: 3px solid #ff2d55;
    padding: 48px 40px;
    position: relative;
}

.rb-panel-label {
    font-size: 10px;
    letter-spacing: 6px;
    text-transform: uppercase;
    color: #555;
    margin-bottom: 40px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.rb-panel-label::after {
    content: '';
    flex: 1;
    height: 1px;
    background: #222;
}

.rb-field {
    margin-bottom: 28px;
    position: relative;
}

.rb-field label {
    display: block;
    font-size: 9px;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 8px;
    font-family: 'Space Mono', monospace;
}

.rb-field input {
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 2px solid #2a2a2a;
    padding: 10px 0;
    font-size: 15px;
    font-family: 'Space Mono', monospace;
    color: #fff;
    outline: none;
    transition: border-color 0.2s;
}

.rb-field input::placeholder { color: #333; }

.f1 label { color: #ff2d55; } .f1 input:focus { border-bottom-color: #ff2d55; }
.f2 label { color: #ff6b35; } .f2 input:focus { border-bottom-color: #ff6b35; }
.f3 label { color: #ff9f0a; } .f3 input:focus { border-bottom-color: #ff9f0a; }
.f4 label { color: #ffd60a; } .f4 input:focus { border-bottom-color: #ffd60a; }
.f5 label { color: #30d158; } .f5 input:focus { border-bottom-color: #30d158; }
.f6 label { color: #0a84ff; } .f6 input:focus { border-bottom-color: #0a84ff; }
.f7 label { color: #5e5ce6; } .f7 input:focus { border-bottom-color: #5e5ce6; }
.f8 label { color: #bf5af2; } .f8 input:focus { border-bottom-color: #bf5af2; }

.rb-field-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
}

.rb-submit {
    width: 100%;
    margin-top: 40px;
    padding: 18px;
    background: linear-gradient(90deg, #ff2d55, #ff9f0a, #ffd60a, #30d158, #0a84ff, #bf5af2);
    border: none;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 22px;
    letter-spacing: 4px;
    color: #000;
    cursor: pointer;
    clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 16px, 100% 100%, 16px 100%, 0 calc(100% - 16px));
    transition: opacity 0.2s, transform 0.1s;
}

.rb-submit:hover { opacity: 0.9; transform: scale(1.01); }
.rb-submit:active { transform: scale(0.99); }

.rb-table-panel {
    background: #0d0d0d;
    border-top: 3px solid #0a84ff;
    overflow: hidden;
}

.rb-table-header {
    padding: 48px 40px 20px;
    border-bottom: 1px solid #1a1a1a;
}

.rb-table-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 42px;
    letter-spacing: 2px;
    background: linear-gradient(90deg, #0a84ff, #bf5af2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.rb-table-meta {
    font-size: 10px;
    color: #444;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-top: 4px;
}

.rb-table-scroll {
    overflow-x: auto;
    overflow-y: auto;
    max-height: 600px;
}

.rb-table {
    width: 100%;
    border-collapse: collapse;
}

.rb-table thead {
    position: sticky;
    top: 0;
    z-index: 10;
    background: #0d0d0d;
}

.rb-table th {
    padding: 16px 20px;
    font-size: 9px;
    letter-spacing: 3px;
    text-transform: uppercase;
    text-align: left;
    font-weight: 700;
    border-bottom: 1px solid #1a1a1a;
    white-space: nowrap;
}

.rb-table th:nth-child(1) { color: #ff2d55; }
.rb-table th:nth-child(2) { color: #ff9f0a; }
.rb-table th:nth-child(3) { color: #ffd60a; }
.rb-table th:nth-child(4) { color: #30d158; }
.rb-table th:nth-child(5) { color: #0a84ff; }
.rb-table th:nth-child(6) { color: #bf5af2; }
.rb-table th:nth-child(7) { color: #ff6b35; }
.rb-table th:nth-child(8) { color: #5e5ce6; }

.rb-table tbody tr {
    border-bottom: 1px solid #111;
    transition: background 0.15s;
}

.rb-table tbody tr:hover { background: #141414; }

.rb-table td {
    padding: 16px 20px;
    font-size: 12px;
    color: #888;
    white-space: nowrap;
}

.rb-name-main { color: #fff; font-size: 13px; font-weight: 700; }
.rb-name-sub { color: #444; font-size: 10px; letter-spacing: 2px; text-transform: uppercase; margin-top: 2px; }
.rb-nickname { color: #ffd60a; font-weight: 700; }
.rb-email { color: #30d158; font-size: 11px; }

.rb-age-pill {
    display: inline-block;
    padding: 3px 10px;
    font-size: 11px;
    font-weight: 700;
    clip-path: polygon(6px 0%, 100% 0%, calc(100% - 6px) 100%, 0% 100%);
}

.rb-contact { color: #bf5af2; }

.rb-actions { display: flex; gap: 8px; align-items: center; }

.rb-btn-edit, .rb-btn-del {
    padding: 6px 14px;
    font-family: 'Space Mono', monospace;
    font-size: 10px;
    letter-spacing: 1px;
    border: none;
    cursor: pointer;
    font-weight: 700;
    transition: opacity 0.15s, transform 0.1s;
    clip-path: polygon(0 0, calc(100% - 6px) 0, 100% 6px, 100% 100%, 6px 100%, 0 calc(100% - 6px));
    text-decoration: none;
    display: inline-block;
}

.rb-btn-edit { background: #0a84ff; color: #000; }
.rb-btn-del { background: #ff2d55; color: #fff; }
.rb-btn-edit:hover, .rb-btn-del:hover { opacity: 0.8; transform: scale(1.05); }

.rb-empty {
    padding: 80px 40px;
    text-align: center;
    color: #222;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 48px;
    letter-spacing: 4px;
}

.rb-error { color: #ff2d55; font-size: 10px; letter-spacing: 1px; margin-top: 6px; }

@media (max-width: 900px) {
    .rb-body { grid-template-columns: 1fr; }
    .rb-subtitle { display: none; }
    .rb-title-line { font-size: 18vw; }
}
</style>

<div class="rb-page">

    <div class="rb-hero">
        <div class="rb-subtitle">User Registration System v1.0</div>
        <div class="rb-title-stack">
            <span class="rb-title-line">REG</span>
            <span class="rb-title-line">ISTER</span>
            <span class="rb-title-line">YOUR</span>
            <span class="rb-title-line">SELF</span>
            <span class="rb-title-line">NOW</span>
        </div>
    </div>

    <div class="rb-body">

        <!-- FORM PANEL -->
        <div class="rb-form-panel">
            <div class="rb-panel-label">New Entry</div>

            <form action="/user-registration" method="POST">
                @csrf

                <div class="rb-field-row">
                    <div class="rb-field f1">
                        <label>First Name</label>
                        <input type="text" name="first-name" placeholder="John" required>
                    </div>
                    <div class="rb-field f2">
                        <label>Last Name</label>
                        <input type="text" name="last-name" placeholder="Doe" required>
                    </div>
                </div>

                <div class="rb-field-row">
                    <div class="rb-field f3">
                        <label>Middle Name</label>
                        <input type="text" name="middle-name" required>
                    </div>
                    <div class="rb-field f4">
                        <label>Nickname</label>
                        <input type="text" name="nickname" required>
                    </div>
                </div>

                <div class="rb-field f5">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="you@example.com" required>
                    @error('email')
                        <p class="rb-error">⚠ {{ $message }}</p>
                    @enderror
                </div>

                <div class="rb-field-row">
                    <div class="rb-field f6">
                        <label>Age</label>
                        <input type="number" name="age" required>
                    </div>
                    <div class="rb-field f7">
                        <label>Contact Number</label>
                        <input type="text" name="contact-number" required>
                    </div>
                </div>

                <div class="rb-field f8">
                    <label>Address</label>
                    <input type="text" name="address" required>
                </div>

                <button type="submit" class="rb-submit">Submit Registration →</button>
            </form>
        </div>

        <!-- TABLE PANEL -->
        <div class="rb-table-panel">
            <div class="rb-table-header">
                <div class="rb-table-title">Registered Legends</div>
                <div class="rb-table-meta">All entries · sorted by id</div>
            </div>

            <div class="rb-table-scroll">
                <table class="rb-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Nickname</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $index => $user)
                            @php
                                $pillColors = ['#ff2d55','#ff9f0a','#ffd60a','#30d158','#0a84ff','#bf5af2'];
                                $pillBg = $pillColors[$index % count($pillColors)];
                                $pillText = in_array($pillBg, ['#ffd60a','#ff9f0a']) ? '#000' : '#fff';
                            @endphp
                            <tr>
                                <td style="color: {{ $pillBg }}; font-weight: 700;">#{{ $user->id }}</td>
                                <td>
                                    <div class="rb-name-main">{{ $user['first-name'] }} {{ $user['last-name'] }}</div>
                                    <div class="rb-name-sub">{{ $user['middle-name'] ?? '' }}</div>
                                </td>
                                <td class="rb-nickname">{{ $user['nickname'] ?? '—' }}</td>
                                <td class="rb-email">{{ $user->email }}</td>
                                <td>
                                    <span class="rb-age-pill" style="background: {{ $pillBg }}; color: {{ $pillText }};">
                                        {{ $user->age }}
                                    </span>
                                </td>
                                <td class="rb-contact">{{ $user['contact-number'] }}</td>
                                <td style="max-width: 160px; overflow: hidden; text-overflow: ellipsis;">{{ $user->address }}</td>
                                <td>
                                    <div class="rb-actions">
                                        <a href="/user-registration/{{ $user->id }}/edit" class="rb-btn-edit">Edit</a>
                                        <form action="/user-registration/{{ $user->id }}" method="POST"
                                            onsubmit="return confirm('Delete this legend?')" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rb-btn-del">Kill</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">
                                    <div class="rb-empty">VOID · NO LEGENDS YET</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
</x-layout>