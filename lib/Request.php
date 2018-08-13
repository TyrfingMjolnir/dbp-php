<?php
/**
 * Created in vim.
 * User: Gjermund G Thorsen( !ghuser TyrfingMjolnir )
 * Date: 8/12/18
 * Time: PST 19:21
 */

namespace Request;


abstract class Request
{
    abstract public function execute();

    public function __toString()
    {
        return get_class();
    }
}
