@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-red-300 dark:border-red-700 dark:bg-red-900 dark:text-red-300 focus:border-black-500 dark:focus:border-black-600 focus:ring-black-500 dark:focus:ring-black-600 rounded-md shadow-sm']) !!}>
