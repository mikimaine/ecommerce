<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'ይህን ፡ ዓይነታ ፡ መቀበል ፡ አለብህ።',
    'active_url'           => 'ይህ ፡ ዓይነታ ፡ ትክክለኛ ፡ URL ፡ አደለም።',
    'after'                => 'ይህ ፡ ዓይነታ ፡ ከ ፡ ቀን ፡ ቡሃላ ፡ መሆን ፡ አለበት።',
    'alpha'                => 'ይህ ፡ ዓይነታ ፡ ፊደል ፡ ብቻ ፡ ነው ፡ ሚይዘው።',
    'alpha_dash'           => 'ይህ ፡ ዓይነታ ፡ ፊደል ፣ ቁጥር ፡ እና ፡ ሰረዝ ፡ ብቻ ፡ ነው ፡ ሚይዘው ።',
    'alpha_num'            => 'ይህ ፡ ዓይነታ ፡ ፊደል ፡ እና ፡ ቁጥር ፡ ብቻ ፡ ነው ፡ ሚይዘው ።',
    'array'                => 'ይህ ፡ ዓይነታ ፡ array ፡ መሆን ፡ አለበት ።',
    'before'               => 'ይህ ፡ ዓይነታ ፡ ከ :date ፡ ቀን ፡ በፊት ፡ መሆን ፡ አለበት ።',
    'between'              => [
        'numeric' => 'ዓይነታው ፡ በትንሹ ፡ እና ፡ በትልቁ ፡ መሆን ፡ አለበት ።The :attribute must be between :min and :max.',
        'file'    => 'ዓይነታው ፡ በትንሹ ፡ እና ፡ በትልቁ ፡ ኪሎ ፡ ባይት ፡ መሆን ፡ አለበት ።The :attribute must be between :min and :max kilobytes.',
        'string'  => 'ዓይነታው ፡ በትንሹ ፡ እና ፡ በትልቁ ፡ The :attribute must be between :min and :max characters.',
        'array'   => 'ዓይነታው ፡ በትንሹ ፡ እና ፡ በትልቁ ፡ The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'ዓይነታው ፡ እውነት ፡ ወይም ፡ ሐሰት ፡ መሆን ፡ አለበት ።',
    'confirmed'            => 'የዓይነታው ፡ ተቀባይነት ፡ አልተዛመደም ።',
    'date'                 => 'ዓይነታው ፡ ትክክለኛ ፡ ቀን ፡ አይደለም ።',
    'date_format'          => 'ዓይነታው ፡ ከትክክለኛው ፡ ይዞታ ፡ ጋር ፡ አልተዛመደም ።The :attribute does not match the format :format.',
    'different'            => 'ዓይነታው ፡ እና ፡ ሌሎች ፡ ግድታ ፡ ልዩ ፡ መሆን ፡ አለባቸው ።The :attribute and :other must be different.',
    'digits'               => 'ዓይነታው ፡ የግድ ፡ አሃዝ ፡ መሆን ፡ አለበት ።',
    'digits_between'       => 'ዓይነታው ፡ በትንሹ ፡ እና ፡ በትልቁ ፡ አሃዝ ፡ መሆን ፡ አለበት ።The :attribute must be between :min and :max digits.',
    'email'                => 'ዓይነታው ፡ የተረጋገጠ ፡ The :attribute must be a valid email address.',
    'exists'               => 'የተመረጠው ፡ ዓይነታ ፡ ተገቢ ፡ አይደለም ።The selected :attribute is invalid.',
    'filled'               => 'የዓይነታው ፡ ማስገቢያ ፡ ውሂብ ፡ ያስፈልገዋል ።The :attribute field is required.',
    'image'                => 'ዓይነታው ፡ ምስላዊ ፡ መሆን ፡ አለበት ።',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'ዓይነታው ፡ የተረጋገጠ ፡ በይነመረብ ፡ ስርዓት ፡ አድራሻ ፡ መጆን ፡ አለበት ።',
    'json'                 => 'ዓይነታው ፡ የተረጋገጠ ፡ ጃቫ ፡ ፅሁፋዊ ፡ ነገረ ፡ ወሳኝ ፡ ኅብረቁምፊ ፡ መሆን ፡ አለበት ።',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'ዓይነታው ፡ ቢያንስ ፡ ትንሹን ፡ መሆን ፡ አለበት ።The :attribute must be at least :min.',
        'file'    => 'ዓይነታው ፡ ቢያንስ ፡ ትንሹን ፡ ኪሎባይትስ ፡ መሆን ፡ አለበት ።The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'የተመረጠው ፡ ዓይነታ ፡ አልተረጋገጠም ።The selected :attribute is invalid.',
    'numeric'              => 'ዓይነታው ፡ አሃዝ ፡ መሆን ፡ አለበት ።The :attribute must be a number.',
    'regex'                => 'የዓይነታው ፡ ይዞታ ፡ አልተረጋገጠም ።The :attribute format is invalid.',
    'required'             => 'የዓይነታው ፡ The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'ዓይነታው ፡ ኅብረቁምፊ ፡ መሆን ፡ አለበት ።The :attribute must be a string.',
    'timezone'             => 'ዓይነታው ፡ የተረጋገጠ ፡ ክልል ፡ ውስጥ ፡ መሆን ፡ አለበት ።The :attribute must be a valid zone.',
    'unique'               => 'ዓይነታው ፡ አንዴ ፡ ተወስዷል ።The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                      => 'ስም ።',
        'avatar'                    => 'አምሳያ ።',
        'email'                     => 'ኢሜይል ።',
        'password'                  => 'የይለፍ ፡ ቃል ።',
        'password_confirmation'     => 'ማረጋገጫ ፡ የይለፍ ፡ ቃል ።',
        'old_password'              => 'የድሮው ፡ የይለፍ ፡ ቃል ።',
        'new_password'              => 'አዲስ ፡ የይለፍ ፡ ቃል ።',
        'new_password_confirmation' => 'አዲስ ፡ ማረጋገጫ ፡ የይለፍ ፡ ቃል ።',
        'created_at'                => 'የተፈጠረበት ፡ ቀን ።',
        'last_updated'              => 'በመጨረሻ ፡ የተቀየረበት ፡ ቀን ።',
        'actions'                   => 'ድርጊቶች ።',
        'active'                    => 'አንቃ ።',
        'confirmed'                 => 'የተረጋገጠ ።',
        'send_confirmation_email'   => 'ማረጋገጫ ፡ ኢሜይል ፡ ላክ ።',
        'associated_roles'          => 'የተገናኘበት ፡ ሚናዎች ።',
        'other_permissions'         => 'ሌላ ፡ ፈቃዶች ።',
        'role_name'                 => 'የሚና ፡ ስም ።',
        'role_sort'                 => 'የሚና ፡ ተራ ፡ አስይዝ ።',
        'associated_permissions'    => 'የተገናኘበት ፡ ፈቃዶች ።',
        'permission_name'           => 'የፈቃድ ፡ ስም ።',
        'display_name'              => 'የመታያ ፡ ስም ።',
        'system_permission'         => 'የዘዴያዊ ፡ መዋቅር ፡ ፍቃድ ።',
        'permission_group_name'     => 'የህቡዕ ፡ ስም ።',
        'group'                     => 'ህቡዕ ።',
        'group-sort'                => 'የህቡዕ ፡ ተራ ፡ አስይዝ ።',
        'dependencies'              => 'ጥገኛ ።',
    ],

];
