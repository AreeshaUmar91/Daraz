<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])) {
    $message = htmlspecialchars($_POST['message']);
    $username = $_SESSION['username'];

    $response = generateResponse($message); // Auto-reply

    file_put_contents("chat.txt", "$username: $message\nBot: $response\n", FILE_APPEND);
}

function generateResponse($input) {
    $responses = [
            "hi" => "Hello! How can I help you?",
            "how are you" => "I'm just a bot, but I'm doing great! 😊",
            "bye" => "Goodbye! Have a great day!",
            "thanks" => "You're welcome! 👍",
            
            // Order Issues & Delivery Delays
            "where is my order" => "Your order is on its way! You will receive it in 2 to 3 days.",
            "why is my order delayed" => "We apologize for the delay. We will try to deliever it faster.",
            "my order is taking too long" => "We’re sorry for the inconvenience. Let me check your order status.",
            "can you speed up my delivery" => "Unfortunately, we can't change the delivery speed once shipped.",
            "order promised today but not arrived" => "Sorry for the delay. Some deliveries take extra time due to external factors.",
            "why is my order stuck in transit" => "Your package might be held due to customs or courier delays. Let me check!",
            "tracking id not updating" => "Tracking updates can sometimes take a few hours. Please wait and check again.",
            "can I change my delivery address" => "Address changes are only possible if the order hasn't been shipped.",
            "can I request express shipping" => "Express shipping is available only before the order is confirmed.",
            "I need my order urgently" => "Please check if same-day or next-day delivery is available in your area.",
            
            // Product Not Received / Wrong Item Received
            "i haven't received my order yet" => "We’re sorry for the delay. Please check your tracking status.",
            "order status says delivered but i didn't receive" => "Please check with neighbors or security. If not found, contact support.",
            "i got the wrong product" => "We apologize! Please share a picture of the item, and we'll arrange a replacement.",
            "one item is missing from my order" => "Some orders are shipped separately. Check your email for tracking details.",
            "i received someone else's package" => "We’re sorry! Please return it, and we’ll send the correct one.",
            
            // Damaged / Defective Products
            "i received a damaged product" => "We're sorry! Please send us a picture, and we’ll process a replacement.",
            "my product is broken" => "That’s disappointing! We’ll help you with a return or exchange.",
            "the product is not working" => "Check if it's under warranty. If so, we’ll arrange a replacement.",
            "my product arrived with missing parts" => "We apologize! Check the packaging carefully. If parts are missing, we'll send them.",
            "the item looks different from the picture" => "Some colors may vary slightly. If it's completely different, request a return.",
            
            // Cancellation & Refunds
            "i want to cancel my order" => "If your order hasn’t shipped, cancel it from your account.",
            "how do i request a refund" => "Go to 'My Orders' and select 'Request Refund'.",
            "can i cancel my order after it has shipped" => "Unfortunately, cancellations aren't possible after shipping. You can refuse delivery.",
            "i received a refund but it’s less than expected" => "Refunds may exclude shipping fees. Contact support if there’s an issue.",
            "when will i get my refund" => "Refunds usually take 5-7 business days to process.",
            
            // Return & Exchange
            "how do i return an item" => "Go to 'My Orders', select the item, and choose 'Return'.",
            "is my order eligible for return" => "Most items are eligible within 7 days. Check our return policy for details.",
            "can i exchange my product" => "Exchanges are available for select items. Otherwise, return it for a refund and reorder.",
            "who pays for return shipping" => "If it's our mistake (wrong/damaged item), we cover shipping. Otherwise, return costs may apply.",
            "do i need original packaging for return" => "Yes, returns must include all packaging, accessories, and tags.",
            
            // Payment Issues
            "payment failed but money deducted" => "If the payment failed, the amount will be refunded in 3-5 business days.",
            "can i change my payment method" => "Once an order is placed, the payment method cannot be changed.",
            "do you offer cash on delivery" => "Yes! COD is available in select locations. Check at checkout.",
            "why was my order canceled automatically" => "Orders may be canceled due to payment failure or stock unavailability.",
            "how do i apply a discount code" => "Enter the promo code at checkout before completing payment.",
            
            // Customer Support & General Queries
            "how do i contact customer support" => "Reach us via live chat, email, or our helpline.",
            "what are your customer service hours" => "Our support team is available 24/7 to assist you!",
            "do you have a physical store" => "We are an online-only store, but we ensure quality service and easy returns!",
            "where do you ship from" => "We ship from multiple warehouses depending on product availability.",
            "do you ship internationally" => "Currently, we ship only within our service regions.",
            
            // Product & Order Modifications
            "can i change my order after placing it" => "Orders cannot be modified once placed. You may cancel and reorder.",
            "can i add an item to my existing order" => "Orders cannot be modified once placed. You will need to place a new order.",
            "how do i check my order history" => "Log in to your account and go to 'My Orders'.",
            "can i gift-wrap my order" => "Gift-wrapping is available for select products at checkout.",
            "how do i update my account details" => "Go to 'My Account' and select 'Edit Profile' to update details.",
            
            // Loyalty & Promotions
            "do you have a rewards program" => "Yes! Earn points with every purchase and redeem them for discounts.",
            "how do i refer a friend" => "Invite friends and earn rewards when they make their first purchase!",
            "do you have seasonal sales" => "Yes! Check our website for discounts during sales events!",
            "how do i get free shipping" => "Orders above a certain amount qualify for free shipping.",
            "do you price match" => "Currently, we don’t offer price matching, but we ensure competitive pricing."
        ];
        
        

    $input = strtolower(trim($input));
    return $responses[$input] ?? "Sorry, I didn't understand that.";
}
?>
