exports.handler = async (event, context) => {
    const userAgent = event.headers['user-agent'] || '';
  
    if (/iPhone|iPad|Macintosh/i.test(userAgent)) {
      return {
        statusCode: 302,
        headers: {
          Location: 'https://apps.apple.com/us/app/id1658921537',
        },
      };
    } else if (/Android/i.test(userAgent)) {
      return {
        statusCode: 302,
        headers: {
          Location: 'https://play.google.com/store/apps/details?id=com.mbtiapplication',
        },
      };
    } else {
      return {
        statusCode: 302,
        headers: {
          Location: 'https://play.google.com/store/apps/details?id=com.mbtiapplication', // 기본 리디렉션
        },
      };
    }
  };
  