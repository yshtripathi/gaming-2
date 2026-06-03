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

    'accepted' => ':attributeを承認してください。',
    'active_url' => ':attributeは、有効なURLではありません。',
    'after' => ':attributeには、:date以降の日付を指定してください。',
    'after_or_equal' => ':attributeには、:date以降もしくは同日の日付を指定してください。',
    'alpha' => ':attributeには、アルファベットのみ使用できます。',
    'alpha_dash' => ':attributeには、英数字、ダッシュ（-）および下線（_）のみ使用できます。',
    'alpha_num' => ':attributeには、英数字のみ使用できます。',
    'array' => ':attributeには、配列を指定してください。',
    'before' => ':attributeには、:date以前の日付を指定してください。',
    'before_or_equal' => ':attributeには、:date以前もしくは同日の日付を指定してください。',
    'between' => [
        'numeric' => ':attributeには、:minから:maxまでの数値を指定してください。',
        'file' => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'string' => ':attributeは、:min文字から:max文字の間で入力してください。',
        'array' => ':attributeの項目数は、:min個から:max個までにしてください。',
    ],
    'boolean' => ':attributeには、trueかfalseを指定してください。',
    'confirmed' => ':attributeと確認用フィールドが一致しません。',
    'date' => ':attributeは、正しい日付ではありません。',
    'date_equals' => ':attributeは、:dateと同日の日付を指定してください。',
    'date_format' => ':attributeの形式は、:formatと一致していません。',
    'different' => ':attributeと:otherには、異なるものを指定してください。',
    'digits' => ':attributeは、:digits桁の数値で指定してください。',
    'digits_between' => ':attributeは、:min桁から:max桁の間で指定してください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeに重複した値が存在します。',
    'email' => ':attributeには、有効なメールアドレスを指定してください。',
    'ends_with' => ':attributeには、次のいずれかで終わる値を指定してください。: :values',
    'exists' => '選択された:attributeは無効です。',
    'file' => ':attributeは、ファイルを指定してください。',
    'filled' => ':attributeには、値を入力してください。',
    'gt' => [
        'numeric' => ':attributeは、:valueより大きい値を指定してください。',
        'file' => ':attributeのサイズは、:value KBより大きい必要があります。',
        'string' => ':attributeは、:value文字より長い必要があります。',
        'array' => ':attributeの項目数は、:value個より多い必要があります。',
    ],
    'gte' => [
        'numeric' => ':attributeは、:value以上の数値を指定してください。',
        'file' => ':attributeのサイズは、:value KB以上である必要があります。',
        'string' => ':attributeは、:value文字以上である必要があります。',
        'array' => ':attributeの項目数は、:value個以上である必要があります。',
    ],
    'image' => ':attributeには、画像を指定してください。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeフィールドは、:otherに存在しません。',
    'integer' => ':attributeには、整数を指定してください。',
    'ip' => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeには、有効なIPv4アドレスを指定してください。',
    'ipv6' => ':attributeには、有効なIPv6アドレスを指定してください。',
    'json' => ':attributeには、有効なJSON文字列を指定してください。',
    'lt' => [
        'numeric' => ':attributeには、:valueより小さい数値を指定してください。',
        'file' => ':attributeのサイズは、:value KBより小さい必要があります。',
        'string' => ':attributeは、:value文字より短い必要があります。',
        'array' => ':attributeの項目数は、:value個より少ない必要があります。',
    ],
    'lte' => [
        'numeric' => ':attributeには、:value以下の数値を指定してください。',
        'file' => ':attributeのサイズは、:value KB以下である必要があります。',
        'string' => ':attributeは、:value文字以下である必要があります。',
        'array' => ':attributeの項目数は、:value個以下である必要があります。',
    ],
    'max' => [
        'numeric' => ':attributeには、:max以下の数値を指定してください。',
        'file' => ':attributeのサイズは、:max KB以下のファイルである必要があります。',
        'string' => ':attributeは、:max文字以下で入力してください。',
        'array' => ':attributeの項目数は、:max個以下にする必要があります。',
    ],
    'mimes' => ':attributeには、次のタイプのファイルを指定してください。: :values',
    'mimetypes' => ':attributeには、次のタイプのファイルを指定してください。: :values',
    'min' => [
        'numeric' => ':attributeには、:min以上の数値を指定してください。',
        'file' => ':attributeのサイズは、:min KB以上のファイルである必要があります。',
        'string' => ':attributeは、:min文字以上で入力してください。',
        'array' => ':attributeの項目数は、:min個以上にする必要があります。',
    ],
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeの形式は無効です。',
    'numeric' => ':attributeを入力してください。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':attributeフィールドが存在している必要があります。',
    'regex' => ':attributeの形式は無効です。',
    'required' => ':attributeは必須入力項目です。',
    'required_if' => ':otherが:valueの時、:attributeは必須入力項目です。',
    'required_unless' => ':otherが:valuesにない場合、:attributeは必須入力項目です。',
    'required_with' => ':valuesが存在する時、:attributeは必須入力項目です。',
    'required_with_all' => ':valuesが存在する時、:attributeは必須入力項目です。',
    'required_without' => ':valuesが存在しない時、:attributeは必須入力項目です。',
    'required_without_all' => ':valuesのどれも存在しない時、:attributeは必須入力項目です。',
    'same' => ':attributeと:otherは、一致している必要があります。',
    'size' => [
        'numeric' => ':attributeには、:sizeを指定してください。',
        'file' => ':attributeには、:size KBのファイルを指定してください。',
        'string' => ':attributeは、:size文字で指定してください。',
        'array' => ':attributeには、:size個の項目を含める必要があります。',
    ],
    'starts_with' => ':attributeは、次のいずれかで始まる必要があります。: :values',
    'string' => ':attributeを入力してください。',
    'timezone' => ':attributeには、有効なタイムゾーンを指定してください。',
    'unique' => '指定の:attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeの形式は無効です。',
    'uuid' => ':attributeは、有効なUUIDである必要があります。',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email' => 'メールアドレス',
        'name' => 'お名前',
        'address1' => '住所',
        'first_name' => '名',
        'last_name' => '姓',
        'phone' => '電話番号',
        'city' => '市区町村',
        'post_code' => '郵便番号',
    ],

];
