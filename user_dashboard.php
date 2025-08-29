<?php

// Ternaries

$username = "Angelo_Tud";
$role = "member";       
$isActive = true;      
$isPremium = true;     
$lastLoginDaysAgo = 1;  


echo ($role === "administrator") 
    ? "Welcome back, Admin $username!<br>" 
    : "Welcome, $username!<br>";


echo ($lastLoginDaysAgo <= 1) 
    ? "You logged in recently.<br><br>" 
    : "It's been a while since your last login.<br><br>";



// If / Else If / Else

if (!$isActive) {
    echo "❌ Your account is inactive. Please contact support.<br>";
} elseif ($role === "administrator") {
    echo "✅ Full access to all features.<br>";
} elseif ($role === "moderator") {
    echo "✅ Access to Forum Management and Member Support.<br>";
    if ($isPremium) {
        echo "⭐ Premium moderation tools unlocked!<br>";
    }
} elseif ($role === "member") {
    echo "✅ Access to Forum Posts and Profile Editor.<br>";
    if ($isPremium) {
        echo "⭐ Premium content library unlocked!<br>";
    }
} else {
    echo "👤 Guest access only. Please register for more features.<br>";
}

echo "<br>";



// Switch

$notificationPreference = "email"; 
switch ($notificationPreference) {
    case "email":
        echo "✉️ Email notifications are enabled.<br>";
        break;
    case "sms":
        echo "📱 SMS notifications are enabled.<br>";
        break;
    case "both":
        echo "✉️ + 📱 Email and SMS notifications are enabled.<br>";
        break;
    case "none":
        echo "🔕 Notifications are turned off.<br>";
        break;
    default:
        echo "⚠️ Unknown notification preference.<br>";
}
?>
