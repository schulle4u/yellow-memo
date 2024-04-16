// Memo extension, https://github.com/schulle4u/yellow-memo

document.getElementById("showMemo").addEventListener("click", function() {
    var messages = JSON.parse(document.getElementById("memoMessages").textContent).messages;
    var randomIndex = Math.floor(Math.random() * messages.length);
    var message = messages[randomIndex];
    
    showMemo(message);
});

// Create the memo toast notification
function showMemo(message) {
    var memo = document.getElementById("memo");
    memo.textContent = message;
    memo.style.display = "block";
    var closeButton = document.createElement("button");
    closeButton.textContent = document.getElementById("showMemo").getAttribute("data-closeLabel");
    closeButton.style.marginLeft = "10px";
    
    closeButton.addEventListener("click", function() {
        memo.style.display = "none";
    });
    memo.appendChild(document.createElement("br"));
    memo.appendChild(closeButton);
}