exports.handler = async (event, context) => {
    const userAgent = event.headers['user-agent'] || '';
  
    if (/iPhone|iPad|Macintosh/i.test(userAgent)) {
      return {
        statusCode: 302,
        headers: {
          Location: 'https://apps.apple.com/us/app/id6746438079',
        },
      };
    } else if (/Android/i.test(userAgent)) {
      return {
        statusCode: 302,
        headers: {
          Location: 'https://play.google.com/store/apps/details?id=com.redev.autogram',
        },
      };
    } else {
      return {
        statusCode: 302,
        headers: {
          Location: 'https://play.google.com/store/apps/details?id=com.redev.autogram', // 기본 리디렉션
        },
      };
    }
  };
  