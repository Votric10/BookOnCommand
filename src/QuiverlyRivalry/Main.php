<?php

namespace QuiverlyRivalry;

use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener
{
    public function onLoad()
    {
        $this->getLogger()->info("Plugin Loading, nitronetwork.ddns.net 19132, join xD!");
    }

    public function onEnable()
    {
        $this->getLogger()->info("plugin enabled!, Use /book in-game to use.");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        switch ($cmd->getName()) {
            case "book":
                if ($sender->hasPermission("feed.command")) {
                    if ($sender instanceof Player) {
                        $book = Item::get(Item::WRITTEN_BOOK, 0, 1);
                        $book->setTitle(C::GREEN . C::UNDERLINE . "Information Booklet");
                        $book->setPageText(0, C::GREEN . C::UNDERLINE . "What the Nitro Network?" . C::BLACK . "\n - The Nitro Network is a semi-custom Factions Server. We are factions, but Nitro. \n That means that we have a fast host, good plugins, and lots of cool features!");
                        $book->setPageText(1, C::GREEN . C::UNDERLINE . "How can my Faction get F-Top 1??" . C::BLACK . "\n - You can earn power in faction wars, pvp, koths, and raiding enemy factions! \n - You can also earn power by recruiting members to your faction.");
                        $book->setPageText(2, C::GREEN . c::UNDERLINE . "How do I store my loot, and get loot?" . C::BLACK . "\n - Try doing /uv 1, for a vault! \n - Go to your Factions world, and make a base, skybase, or lair! \n - Make sure you raid other factions bases for success!");
                        $book->setPageText(3, C::GREEN . c::UNDERLINE . "Helpful Commands" . C::BLACK . "\n- /f topfactions \n - /warpui \n - /uv \n - /shop \n - /mask \n - /ulog \n - /cp");
                        $book->setAuthor("the Nitro Network Team");
                        $sender->getInventory()->addItem($book);
                    }
                }
        }
        return true;
    }
}
