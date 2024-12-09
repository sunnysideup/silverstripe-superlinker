<?php

namespace Fromholdio\SuperLinker\Model;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Class \Fromholdio\SuperLinker\Model\VersionedSuperLink
 *
 * @property string $SystemLinkKey
 * @property string $SiteTreeAnchor
 * @property string $PhoneNumber
 * @property string $GlobalAnchorKey
 * @property bool $DoForceDownload
 * @property string $ExternalURL
 * @property string $Email
 * @property string $EmailCC
 * @property string $EmailBCC
 * @property string $EmailSubject
 * @property string $EmailBody
 * @property int $Version
 * @property string $LinkText
 * @property string $LinkType
 * @property bool $DoOpenInNew
 * @property bool $DoNoFollow
 * @property int $SiteTreeID
 * @property int $FileID
 * @method SiteTree SiteTree()
 * @method File File()
 * @mixin Versioned
 * @mixin EmailLink
 * @mixin ExternalLink
 * @mixin FileLink
 * @mixin GlobalAnchorLink
 * @mixin NullLink
 * @mixin PhoneLink
 * @mixin SiteTreeLink
 * @mixin SystemLink
 */
class VersionedSuperLink extends DataObject
{
    use SuperLinkTrait;

    private static $table_name = 'VersionedSuperLink';

    private static $extensions = [
        Versioned::class
    ];
}
