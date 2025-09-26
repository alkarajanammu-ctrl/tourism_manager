<?php
// Redirect to the real homepage to avoid 404s while preserving existing links.
// Use a 302 so browsers don't aggressively cache it during development.
header('Location: index.php', true, 302);
exit;
?>