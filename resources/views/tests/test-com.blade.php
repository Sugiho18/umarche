<x-tests.app>
    <x-slot name="header">ヘッダーのデータとして呼ばれる</x-slot>
        コンポーネントテストCom1<br>
        <div class="bg-red-300">ここにx-タグでresources/components/tests/testcard.bread.phpのデータを呼び出している</div>
        全て初期値<br>
        <x-tests.card/>
        データを呼び出している<br>
        <x-tests.card/>
        CSS変更<br>
        <x-tests.card class="bg-red-300" title="CSS変更" content="あういえお"/>
        他のファイルデータ参照<br>
        <x-tests.testcard/>
        <x-tests.testcard title="コンポーネントファイルでテンプレートを作って" content="変数を格納して" message="一つのデータにしている"/>
        <x-tests.testcard blank="空ではない" :message2="$message2"/>
</x-tests.app>
    