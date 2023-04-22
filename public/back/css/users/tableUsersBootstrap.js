$(document).ready(function() {
    // Get the table body element
    var tableBody = $('table tbody');
  
    // Handle pagination link clicks
    $('#my-pagination').on('click', 'li.page-item:not(.disabled) a', function(event) {
      event.preventDefault();
  
      // Get the page number from the link
      var pageNum = parseInt($(this).text());
  
      // Send an AJAX request to the server to get the new data
      $.ajax({
        url: '/path/to/data?page=' + pageNum,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          // Clear the current data from the table
          tableBody.empty();
  
          // Populate the table with the new data
          $.each(response.data, function(index, item) {
            var row = '<tr><td>' + item.name + '</td><td>' + item.email + '</td></tr>';
            tableBody.append(row);
          });
  
          // Update the pagination links
          updatePagination(response.currentPage, response.totalPages);
        }
      });
    });
  
    function updatePagination(currentPage, totalPages) {
      // Update the current page indicator
      $('#my-pagination li.active').removeClass('active');
      $('#my-pagination li.page-item:eq(' + (currentPage - 1) + ')').addClass('active');
  
      // Update the Previous link
      if (currentPage == 1) {
        $('#my-pagination li:first-child').addClass('disabled');
      } else {
        $('#my-pagination li:first-child').removeClass('disabled');
      }
  
      // Update the Next link
      if (currentPage == totalPages) {
        $('#my-pagination li:last-child').addClass('disabled');
      } else {
        $('#my-pagination li:last-child').removeClass('disabled');
      }
    }
  });
  