<x-layout>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Mono:wght@400;700&display=swap');

* { box-sizing: border-box; margin: 0; padding: 0; }

.edit-page {
    min-height: 100vh;
    background: #0a0a0a;
    font-family: 'Space Mono', monospace;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.edit-sidebar {
    background: #0d0d0d;
    border-right: 1px solid #1a1a1a;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 60px 48px;
    position: relative;
    overflow: hidden;
}

.edit-sidebar::after {
    content: 'EDIT';
    font-family: 'Bebas Neue', sans-serif;
    font-size: 260px;
    color: rgba(255,255,255,0.02);
    position: absolute;
    bottom: -20px;
    left: -10px;
    line-height: 1;
    pointer-events: none;
    letter-spacing: -10px;
}

.edit-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #555;
    text-decoration: none;
    transition: color 0.2s;
}

.edit-back:hover { color: #ff2d55; }
.edit-back::before { content: '←'; font-size: 14px; }

.edit-heading {
    position: relative;
    z-index: 1;
}

.edit-uid {
    font-size: 10px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #333;
    margin-bottom: 16px;
}

.edit-name-display {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(48px, 6vw, 88px);
    line-height: 0.9;
    letter-spacing: -1px;
}

.edit-name-display span:nth-child(1) { display: block; color: #ff2d55; }
.edit-name-display span:nth-child(2) { display: block; -webkit-text-stroke: 1.5px #0a84ff; color: transparent; }

.edit-meta-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    position: relative;
    z-index: 1;
}

.edit-meta-item {}

.edit-meta-label {
    font-size: 9px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #333;
    margin-bottom: 6px;
}

.edit-meta-value {
    font-size: 13px;
    font-weight: 700;
}

.edit-form-panel {
    background: #111;
    padding: 60px 48px;
    overflow-y: auto;
}

.edit-form-title {
    font-size: 10px;
    letter-spacing: 6px;
    text-transform: uppercase;
    color: #444;
    margin-bottom: 48px;
    padding-bottom: 16px;
    border-bottom: 1px solid #1d1d1d;
}

.rb-field {
    margin-bottom: 32px;
}

.rb-field label {
    display: block;
    font-size: 9px;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.rb-field input {
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 2px solid #222;
    padding: 10px 0;
    font-size: 15px;
    font-family: 'Space Mono', monospace;
    color: #fff;
    outline: none;
    transition: border-color 0.2s;
}

.rb-field input::placeholder { color: #2a2a2a; }

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
    margin-top: 48px;
    padding: 20px;
    background: linear-gradient(90deg, #ff2d55, #ff9f0a, #ffd60a, #30d158, #0a84ff, #bf5af2);
    border: none;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 22px;
    letter-spacing: 5px;
    color: #000;
    cursor: pointer;
    clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 16px, 100% 100%, 16px 100%, 0 calc(100% - 16px));
    transition: opacity 0.2s, transform 0.1s;
}

.rb-submit:hover { opacity: 0.88; transform: scale(1.01); }
.rb-submit:active { transform: scale(0.99); }

@media (max-width: 860px) {
    .edit-page { grid-template-columns: 1fr; }
    .edit-sidebar { min-height: auto; padding: 40px 28px; }
    .edit-form-panel { padding: 40px 28px; }
    .edit-sidebar::after { display: none; }
}
</style>

<div class="edit-page">

    <!-- SIDEBAR: identity display -->
    <div class="edit-sidebar">
        <a href="/user-registration" class="edit-back">Back to all</a>

        <div class="edit-heading">
            <div class="edit-uid">User · #{{ $user->id }}</div>
            <div class="edit-name-display">
                <span>{{ $user['first-name'] }}</span>
                <span>{{ $user['last-name'] }}</span>
            </div>
        </div>

        <div class="edit-meta-grid">
            <div class="edit-meta-item">
                <div class="edit-meta-label">Nickname</div>
                <div class="edit-meta-value" style="color: #ffd60a;">{{ $user->nickname ?? '—' }}</div>
            </div>
            <div class="edit-meta-item">
                <div class="edit-meta-label">Age</div>
                <div class="edit-meta-value" style="color: #0a84ff;">{{ $user->age }}</div>
            </div>
            <div class="edit-meta-item">
                <div class="edit-meta-label">Email</div>
                <div class="edit-meta-value" style="color: #30d158; font-size: 11px; word-break: break-all;">{{ $user->email }}</div>
            </div>
            <div class="edit-meta-item">
                <div class="edit-meta-label">Contact</div>
                <div class="edit-meta-value" style="color: #bf5af2; font-size: 12px;">{{ $user['contact-number'] }}</div>
            </div>
        </div>
    </div>

    <!-- FORM PANEL -->
    <div class="edit-form-panel">
        <div class="edit-form-title">Modify Entry</div>

        <form action="/user-registration/{{ $user->id }}" method="POST">
            @csrf
            @method("PATCH")

            <div class="rb-field-row">
                <div class="rb-field f1">
                    <label>First Name</label>
                    <input type="text" name="first-name" value="{{ $user['first-name'] }}" required>
                </div>
                <div class="rb-field f2">
                    <label>Last Name</label>
                    <input type="text" name="last-name" value="{{ $user['last-name'] }}" required>
                </div>
            </div>

            <div class="rb-field-row">
                <div class="rb-field f3">
                    <label>Middle Name</label>
                    <input type="text" name="middle-name" value="{{ $user['middle-name'] }}" required>
                </div>
                <div class="rb-field f4">
                    <label>Nickname</label>
                    <input type="text" name="nickname" value="{{ $user->nickname }}" required>
                </div>
            </div>

            <div class="rb-field f5">
                <label>Email Address</label>
                <input type="email" name="email" value="{{ $user->email }}" placeholder="you@example.com" required>
            </div>

            <div class="rb-field-row">
                <div class="rb-field f6">
                    <label>Age</label>
                    <input type="number" name="age" value="{{ $user->age }}" required>
                </div>
                <div class="rb-field f7">
                    <label>Contact Number</label>
                    <input type="text" name="contact-number" value="{{ $user['contact-number'] }}" required>
                </div>
            </div>

            <div class="rb-field f8">
                <label>Address</label>
                <input type="text" name="address" value="{{ $user->address }}" required>
            </div>

            <button type="submit" class="rb-submit">Save Changes →</button>
        </form>
    </div>

</div>
</x-layout>