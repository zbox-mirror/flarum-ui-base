<?php

namespace Z17\UI_Base;

use Flarum\Extend;

return [
  (new Extend\Frontend('forum'))
    ->css(__DIR__ . '/less/forum.less'),

  new Extend\Locales(__DIR__ . '/locale'),
];
