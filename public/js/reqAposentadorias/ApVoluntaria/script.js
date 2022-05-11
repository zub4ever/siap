$(document).ready(function () {
// Sass map from `_variables.scss`
// Override this and recompile your Sass to generate different states
    $form - validation - states: map - merge(
    (
            "valid": (
                    "color": $form - feedback - valid - color,
                    "icon": $form - feedback - icon - valid
                    ),
            "invalid": (
                    "color": $form - feedback - invalid - color,
                    "icon": $form - feedback - icon - invalid
                    )
            ),
            $form - validation - states
    );

// Loop from `_forms.scss`
// Any modifications to the above Sass map will be reflected in your compiled
// CSS via this loop.
    @each $state, $data in $form - validation - states
    {
    @include form - validation - state($state, map - get($data, color), map - get($data, icon));
    }

});