<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    * {
        direction: rtl;
    }

    div {
        margin-top: 10px;
    }

    label {
        width: 100px;
        display: inline-block;
    }

    input {
        width: 270px;
        height: 34px;
    }

    button {
        margin-top: 20px;
    }
</style>
<body>
<form method="post" action="{{ route('transaction') }}" style="text-align: center;">
    @csrf
    <h2>کارت به کارت</h2>
    <div class="source">
        <label for="source">کارت مبدأ</label>
        <input type="text" name="source">
        <x-input-error :messages="$errors->get('source')" class="error"/>
    </div>

    <div class="destination">
        <label for="destination">کارت مقصد</label>
        <input type="text" name="destination">
        <x-input-error :messages="$errors->get('destination')" class="error"/>
    </div>

    <div class="amount">
        <label for="amount">مبلغ</label>
        <input type="text" name="amount">
        <x-input-error :messages="$errors->get('amount')" class="error"/>
    </div>

    <button>انجام عملیات</button>

    <div class="top-users">
        @foreach($topUsers as $user)
            <p>{{ $user['user']->name }}</p>
            @foreach($user['transactions'] as $transaction)
                <p>{{ $transaction->amount }}</p>
            @endforeach
        @endforeach
    </div>
</form>
</body>
</html>
