<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Grid\Column;

use byteShard\Enum;
use byteShard\Grid;
use byteShard\Internal\Grid\Column;

/**
 * Class Tristate
 * @package byteShard\CellContent\Grid\Column
 */
class Tristate extends Column
{
    protected string             $type           = 'tristate';
    protected string             $dhxTypeRw      = Grid\Enum\Type::CHECKBOX_TRISTATE;
    protected string             $dhxTypeRo      = Grid\Enum\Type::CHECKBOX_TRISTATE_READONLY;
    protected string             $sort           = Grid\Enum\Sort::STRING;
    protected string             $align          = Grid\Enum\Align::CENTER;
    protected string             $filter         = Grid\Enum\Filter::TRISTATE;
    protected int                $width          = 100;
    protected Enum\DB\ColumnType $db_column_type = Enum\DB\ColumnType::VARCHAR;
}
