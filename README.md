laravel-setup-sample
====================

Laravelを使ったサンプルアプリです。
構築の仕方はコミットログを参照してください。

## 必要なツール等

* PHP 7
* Composer
* Node 6
* npm 3以上
* Vagrant
* いずれかの仮想化ソフト
    - VirtualBox
    - VMware
    - Parallels
* Yarn

    ```shell
    # npm がインストールされている状態で
    npm install -g yarn
    ```

## 初期設定

下記のコマンド実行

```shell
# VMイメージ追加
vagrant box add laravel/homestead

# Composerライブラリインストール
composer install

# プロジェクトの初期設定
composer run setup

# npm ライブラリインストール
yarn
```

必要に応じて、上記実行後に出来上がる `Homestead.yaml` を書き換える

* ip  
    起動するVMに割り当たるIPアドレスを設定する。
* provider  
    初期値は `virtualbox` になっている。VirtualBox以外を使用する場合は他の値を設定する。(`vmware_fusion`, `vmware_workstation`, `parallels`)

# 起動

```shell
# VM起動
vagrant up

# JavaScriptの即時ビルド ※ホスト側で実行する必要がある
yarn run hot

# ただし、jsファイルの修正をVM側でやる場合はVM側で実行してもよい
# その場合、node_modulesを消してVM側で yarn をやり直す
```

`vagrant up` 時に下記のエラーが出る場合、上記のエラーが出る場合は `Homestead.yaml` の ip を変更する(192.168.10.10 -> 192.168.30.10 など)

```
The specified host network collides with a non-hostonly network!
This will cause your specified IP to be inaccessible. Please change
the IP or name of your host only network so that it no longer matches that of
a bridged or non-hostonly network.
```

hosts ファイルを書き換える

```
<Homestead.yamlに記載したip> laravel-setup-sample
```

ブラウザで http://laravel-setup-sample を開く

## その他

コミット前に下記コマンドを実行し問題を解決すること

```
# コード規約に合うように修正
composer run cs-fixer

# コードの問題点を表示
composer run phpmd
```
