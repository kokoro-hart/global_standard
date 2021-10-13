/**
 * @modules : node_modulesフォルダまでの絶対パスのエイリアス
 * webpack.config.jsにて定義している
 */

//SVGスプライトをIEで使用するためのライブラリ
import '@modules/svgxuse';

//ブラウザ判定のためライブラリ
import './lib/b_browser_switcher';

//line-clampをIEで使用するためのライブラリ
import './lib/clamp';

import './common'

//ドロワーメニュー
import './modules/drawer'

//アコーディオンメニュー
import './modules/accordion'