<ul>
    {foreach $module_result.groups as $key=>$group}
        <li>{$key}
            <ul>
            {foreach $group.entities as $entity}
                <li><a
                href={concat("sfentity/view/",$entity.entity)|ezurl()}">{$entity.name}</a></li>
            {/foreach}
            </ul>
        </li>
    {/foreach}
</ul>
