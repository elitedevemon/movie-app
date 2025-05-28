self.addEventListener("push", (event) => {
  const notification = event.data.json();

  event.waitUntil(
    self.registration.showNotification(notification.title, {
      body: notification.body,
      icon: "./assets/wp-content/uploads/moviesverse.webp",
      data: {
        url: notification.url
      }
    })
  );
});


self.addEventListener("notificationclick", (event) => {
  event.notification.close();
  event.waitUntil(
    clients.openWindow(event.notification.data.url)
  );
});