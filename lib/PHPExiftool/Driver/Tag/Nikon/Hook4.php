<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Hook4 extends AbstractTag
{

    protected $Id = 3708;

    protected $Name = 'Hook4';

    protected $FullName = 'Nikon::ShotInfoD500';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'Hook 4';

    protected $flag_Permanent = true;

}
