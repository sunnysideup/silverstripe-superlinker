<?php

namespace Fromholdio\SuperLinker\Model;

use SilverStripe\ORM\DataObject;

/**
 * Class \Fromholdio\SuperLinker\Model\SuperLink
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
 * @property string $LinkText
 * @property string $LinkType
 * @property bool $DoOpenInNew
 * @property bool $DoNoFollow
 * @property int $SiteTreeID
 * @property int $FileID
 * @method SiteTree SiteTree()
 * @method File File()
 * @mixin EmailLink
 * @mixin ExternalLink
 * @mixin FileLink
 * @mixin GlobalAnchorLink
 * @mixin NullLink
 * @mixin PhoneLink
 * @mixin SiteTreeLink
 * @mixin SystemLink
 */
class SuperLink extends DataObject
{
    use SuperLinkTrait;

    private static $table_name = 'SuperLink';
}
