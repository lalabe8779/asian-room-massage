<div class="grid grid-cols-6 gap-6">
    <div class="col-span-6 sm:col-span-3">
        <x-form.group>
            <x-slot name="label">
                <x-form.label for="first_name">First name</x-form.label>
            </x-slot>
            <x-form.input
                id="first_name"
                name="first_name"
                placeholder="Mary"
                autofocus
            />
        </x-form.group>
    </div>

    <!-- Last Name -->
    <div class="col-span-6 sm:col-span-3">
        <x-form.group>
            <x-slot name="label">
                <x-form.label for="family_name">Last name</x-form.label>
            </x-slot>
            <x-form.input
                id="family_name"
                name="last_name"
                placeholder="Jane"
            />
        </x-form.group>
    </div>

    <!-- Email -->
    <div class="col-span-6 sm:col-span-3">
        <x-form.group>
            <x-slot name="label">
                <x-form.label for="email">Email</x-form.label>
            </x-slot>
            <x-form.input
                id="email"
                type="email"
                placeholder="you@example.com"
            >
                <x-slot name="leadingIcon">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                </x-slot>
            </x-form.input>
        </x-form.group>
    </div>

    <!-- Phone -->
    <div class="col-span-6 sm:col-span-3">
        <x-form.group>
            <x-slot name="label">
                <x-form.label for="phone">Phone</x-form.label>
            </x-slot>
            <x-form.phone
                name="phone"
                id="phone"
            />
        </x-form.group>
    </div>

    <!-- Date -->
    <div class="col-span-6 sm:col-span-3">
        <x-form.group class="flex-1">
            <x-slot name="label">
                <x-form.label for="date">Date</x-form.label>
            </x-slot>
            <x-form.date id="date" name="date"/>
        </x-form.group>
    </div>

    <!-- Time -->
    <div class="col-span-6 sm:col-span-3">
        <x-form.group class="flex-1">
            <x-slot name="label">
                <x-form.label for="time">Time</x-form.label>
            </x-slot>
            <x-form.time id="time" name="time" />
        </x-form.group>
    </div>

    <!-- Hotel -->
    <div class="col-span-6 sm:col-span-3">
        <x-form.group>
            <x-slot name="label">
                <x-form.label for="hotel">Hotel</x-form.label>
            </x-slot>
            <x-form.input id="hotel" name="hotel" />
        </x-form.group>
    </div>

    <!-- Room number -->
    <div class="col-span-6 sm:col-span-3">
        <x-form.group>
            <x-slot name="label">
                <x-form.label for="room_number">Room number</x-form.label>
            </x-slot>
            <x-form.input id="room_number" name="room_number" />
        </x-form.group>
    </div>

    <div class="col-span-6">
        <x-form.group>
            <x-slot name="label">
                <x-form.label for="message">Message</x-form.label>
            </x-slot>
            <x-form.textarea id="message" name="message" />
        </x-form.group>
    </div>
</div>
