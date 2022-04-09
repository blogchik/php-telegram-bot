<?php

// PHP Input
$update = json_decode(file_get_contents('php://input'));

#### Telegram-bot Types // https://core.telegram.org/bots/api#available-types

// For Default Message
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$message_date = $message->date;
$user_id = $message ->from->id;
$user_name = $message->from->first_name;
$forward_from = $message->forward_from->id;
$forward_from_chat = $message->forward_from_chat->id;
$via_bot = $message->via_bot->id;

$text = $message->text;
$animation = $message->animation;
$audio = $message->audio;
$document = $message->document;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$video_note = $message->video_note;
$voice = $message->voice;
$caption = $message->caption;
$caption_entities = $message->caption_entities;
$contact = $message->contact;
$contact_number = $contact->phone_number;
$dice = $message->dice;
$game = $message->game;
$poll = $message->poll;
$venue = $message->venue;
$location = $message->location;
$new_chat_members = $message->new_chat_members;
$left_chat_member = $message->left_chat_member;
$new_chat_title = $message->new_chat_title;
$new_chat_photo = $message->new_chat_photo;
$delete_chat_photo = $message->delete_chat_photo;
$group_chat_created = $message->group_chat_created;
$supergroup_chat_created = $message->supergroup_chat_created;
$channel_chat_created = $message->channel_chat_created;
$message_auto_delete_timer_changed = $message->message_auto_delete_timer_changed;
$migrate_to_chat_id = $message->migrate_to_chat_id;
$migrate_from_chat_id = $message->migrate_from_chat_id;
$pinned_message = $message->pinned_message;
$invoice = $message->invoice;
$successful_payment = $message->successful_payment;
$connected_website = $message->connected_website;
$passport_data = $message->passport_data;
$proximity_alert_triggered = $message->proximity_alert_triggered;
$voice_chat_scheduled = $message->voice_chat_scheduled;
$voice_chat_started = $message->voice_chat_started;
$voice_chat_ended = $message->voice_chat_ended;
$voice_chat_participants_invited = $message->voice_chat_participants_invited;
$reply_markup = $message->reply_markup;

$file_id = $message->file_id;

// For CallBack Query
$query = $update->callback_query;
$data = $query->data;
$user_id_c = $query->query->id;
$chat_id_c = $query->message->chat->id;
$message_id_c = $query->message->message_id;
$ccid = $query->message->chat->id;
$cuid = $query->message->from->id;
$query_id = $query->id;
$cqid = $query->from->id;
$user_name_c = $query->from->first_name;

?>